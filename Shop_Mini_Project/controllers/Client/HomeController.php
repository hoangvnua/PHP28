<?php
require_once 'controllers/BaseController.php';
require_once 'models/Content_top_index.php';
require_once 'models/Category.php';
require_once 'models/Designer.php';
require_once 'models/Blog.php';
require_once 'models/Header.php';
require_once 'models/Style.php';
require_once 'models/Cart.php';

class HomeController extends BaseController
{

    public function __construct()
    {
        if (!$_SESSION['is_login']) {
            $this->redirect('?admin=auth&mod=auth&act=getFormLogin');
        }

        if (strcmp($_GET['act'], 'allCategories') == 0 || strcmp($_GET['act'], 'detail') == 0) {
            $header = new Header();
            $header = $header->getMenu();
            $this->view('banner/header', [
                'header' => $header
            ]);
        }
    }

    function home()
    {
        $top_content = new Content_top_index();
        $blog = new Blog();
        $designer = new Designer();
        $categories = $product_new = $product_sale = $product_hot = new Category();
        $header = new Header();
        $style = $custom = new Style();

        $content = $top_content->getAll();
        $categories = $categories->get8sp();
        $product_new = $product_new->getNew();
        $product_sale = $product_sale->getSale();
        $product_hot = $product_hot->getHot();
        $designer = $designer->getAll();
        $blog = $blog->getAll();
        $header = $header->getMenu();
        $custom = $custom->getCustom();
        $style = $style->getStyle();
        // echo "<pre>";
        // print_r($models);
        // echo "</pre>";
        // die();
        //Đổ lên view
        $this->view('home/home', [
            'content' => $content,
            'categories' => $categories,
            'product_new' => $product_new,
            'product_sale' => $product_sale,
            'product_hot' => $product_hot,
            'designer' => $designer,
            'blog' => $blog,
            'header' => $header,
            'custom' => $custom,
            'style' => $style
        ]);
    }

    function detail()
    {
        $id = $_GET['id'];
        $model = new Category();

        $detail = $model->find($id);
        $this->view('home/detail', [
            'detail' => $detail
        ]);
    }

    function allCategories()
    {
        $model = new Category();
        $categories = $model->getAll();
        $this->view('home/allcategories', [
            'categories' => $categories
        ]);
    }

    function cart()
    {
        $id = $_GET['id'];
        $category = new Category();
        $cart = new Cart();
        $ca = $cart->find($id);
        $car = $cart->getID();
 
        $layid = "";
        foreach($car as $c){
            $layid .=$c['id'].",";
        }
        $layid = trim($layid,",");
        $arr = explode(",",$layid);

        if (in_array($id, $arr) ){
            $data = $ca['soluong'] + 1;   
            // echo $ca['soluong']; die();   
            $cart = $cart->sanPhamTrung($data,$id);
        } else {
            $category = $category->find($id);
            // $cart = $cart->insert();
            $name = $category['name'];
            $images = $category['images1'];
            $price = $category['price_sale'];
            $data = $id . "," . "'$images'" . "," . "'$name'" . "," . $price;
            $cart = $cart->themVaoGioHang($data);
        }  

        if ($cart == true) {
            $this->redirect('?admin=client&mod=home&act=home');
        }

        // echo $sql;
        // echo "<pre>";
        // print_r($cate);
        // echo $cate['id'];
        // echo "</pre>";
        // die();

    }

    function giohang(){
        $cart = new Cart();
        $cart = $cart->getAll();
        $this->view('home/cart', [
            'cart' => $cart
        ]);

    }

    function delete(){
        $id = $_GET['id'];
        $delete = new Cart();
        $delete = $delete->delete($id);
        if($delete==true){
            $this->redirect('?admin=client&mod=home&act=giohang');
        }
    }

    function increment(){
        $id = $_GET['id'];
        $increment = new Cart();
        $sl = $increment->find($id);
        $soluong = ++$sl['soluong'];

        $soluong = $increment->tag($soluong,$id);
        if($soluong==true){
            $this->redirect('?admin=client&mod=home&act=giohang');
        }
    }
    function decrement(){
        $id = $_GET['id'];
        $increment = new Cart();
        $sl = $increment->find($id);
        $soluong = --$sl['soluong'];

        $soluong = $increment->giam($soluong,$id);
        if($soluong==true){
            $this->redirect('?admin=client&mod=home&act=giohang');
        }
    }
}
