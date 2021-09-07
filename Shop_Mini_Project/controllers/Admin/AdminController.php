<?php
require_once 'controllers/BaseController.php';
require_once 'models/Content_top_index.php';
require_once 'models/Category.php';
require_once 'models/Designer.php';
require_once 'models/Blog.php';
require_once 'models/Header.php';
require_once 'models/Style.php';
require_once 'models/Chinhsua.php';
require_once 'models/UploadFile.php';

class AdminController extends BaseController
{
    public function __construct()
    {
        if (!$_SESSION['is_login']) {
            $this->redirect('?admin=auth&mod=auth&act=getFormLogin');
        } elseif ($_SESSION['is_login']) {
            if ($_SESSION['auth']['level'] != 0) {
                $this->redirect('?admin=client&mod=home&act=home');
            }
        }
    }

    function list()
    {
        $model = new Chinhsua();
        $cs = $model->getAll();
        // Đổ lên view
        $this->view('admin/list', [
            'cs' => $cs
        ]);
    }

    function listdetail()
    {
        $id = $_GET['id'];
        $name = new Chinhsua();
        $name = $name->find($id);
        if ($id == 1) {
            $menu = new Header();
            $menu = $menu->getMenu();
        } elseif ($id == 2) {
            $menu = new Header();
            $menu = $menu->getTitleHeader();
        } elseif ($id == 3) {
            $menu = new Content_top_index();
            $menu = $menu->getAll();
        } elseif ($id == 4) {
            $menu = new Category();
            $menu = $menu->getAll();
        } elseif ($id == 5) {
            $menu = new Style();
            $menu = $menu->getStyle();
        } elseif ($id == 6) {
            $menu = new Designer();
            $menu = $menu->getAll();
        } elseif ($id == 7) {
            $menu = new Blog();
            $menu = $menu->getAll();
        } elseif ($id == 8) {
            $menu = new Style();
            $menu = $menu->getCustom();
        }
        $this->view('admin/listdetail', [
            'menu' => $menu,
            'name' => $name
        ]);
    }

    

    function create()
    {
        $model = new Category();
        $categories = $model->getAll();
        $this->view('admin/add', [
            'category' => $categories
        ]);
    }

    function store()
    {
        $data = $_POST;
        $flag = true;
        // print_r($data);
        // die();
        // if(isset($data['images1'])){
            $upload = uploadFile("images1", 'publics/images', array('jpg', 'jpeg', 'png', 'gif'), 10, true);
            if ($upload == true) {
               $data['images1'] = $upload[1];
            }
      
        if(!isset($data['name'])||strlen($data['name']) == 0){
            $_SESSION['error']['name']="Không được để trống tên";
            $flag = false;
        }
        if(!isset($data['price'])||strlen($data['price']) == 0){
            $_SESSION['error']['price']="Không được để trống giá bán";
            $flag = false;
        }
        
        if(!isset($data['price_sale'])||strlen($data['price_sale']) == 0){
            $_SESSION['error']['price_sale']="Không được để trống giá sale";
            $flag = false;
        }

        if($flag){
            $model = new Category();
            $status = $model->insert($data);
            if ($status == true) {
                $this->redirect('?admin=admin&mod=admin&act=listdetail&id=4');
            }
        }else{
            $this->back();
        }
    }

    function edit()
    {
        $id = $_GET['id'];
        $model = new Category();
        $categories = $model->getAll();
        $category = $model->find($id);
        $this->view('admin/edit', [
            'category' => $category
        ]);
    }

    function update()
    {
        $data = $_POST;
        $upload = uploadFile("images1", 'publics/images', array('jpg', 'jpeg', 'png', 'gif'), 10, true);
        if ($upload == true) {
            $data['images1'] = $upload[1];
        }
        $model = new Category();
        $status = $model->update($data);
        if ($status == true) {
            $this->redirect('?admin=admin&mod=admin&act=listdetail&id=4');
        }
    }

    function delete()
    {
        $id = $_GET['id'];
        $model = new Category();
        $status = $model->delete($id);
        if ($status == true) {
            $this->redirect('?admin=admin&mod=admin&act=listdetail&id=4');
        }
    }
}
