<?php
require_once 'BaseController.php';
require_once 'models/Category.php';
  class CategoryController extends BaseController{

    public function __construct()
    {
      if (!$_SESSION['is_login']){
        $this->redirect('?mod=auth&act=login_form');
      }
    }

    function list(){
      $model = new Category();
      $categories = $model->getAll();
      //Đổ lên view
      $this->view('category/list',[
        'categories' => $categories
      ]);
    }

    function detail(){
      $id = $_GET['id'];
      $model = new Category();
      $category = $model->find($id);
      $this->view('category/detail',[
        'categories' => $category
      ]);
    }

    function create(){
      $model = new Category();
      $categories = $model->getAll();
      $this->view('category/add',[
        'category' => $categories
      ]);
    }

    function store(){
      $data =$_POST;
      $upload=uploadFile("avatar",'publics/images',array('jpg','jpeg','png','gif'),10,true);
      if($upload==true) {
          $data['avatar']=$upload[1];
      }
      $model = new Category();
      $status = $model->insert($data);
      if ($status==true) {
        $this->redirect('?mod=category&act=list');
      }
    }

    function edit(){
      $id = $_GET['id'];
      $model = new Category();
      $categories = $model->getParentCategory();
      $category = $model->find($id);
      $this->view('category/edit',[
        'category' => $category
      ]);
    }

    function update(){
      $data = $_POST;
      $upload=uploadFile("avatar",'publics/images',array('jpg','jpeg','png','gif'),10,true);
      if($upload==true) {
          $data['avatar']=$upload[1];
      }
      $model = new Category();
      $status = $model->update($data);
      if($status==true){
        $this->redirect('?mod=category&act=list');
      }
    }

    function delete(){
      $id = $_GET['id'];
      $model = new Category();
      $status = $model->delete($id);
      if($status==true){
        $this->redirect('?mod=category&act=list');
      }
    }
  }
 ?>
