<?php
require_once 'models/Category.php';
  class CategoryController{
    function list(){
      $model = new Category();
      $categories = $model->getAll();
      //Đổ lên view
      require_once 'views/category/list.php';
    }

    function detail(){
      $id = $_GET['id'];
      $model = new Category();
      $category = $model->find($id);
      require_once 'views/category/detail.php';
    }

    function create(){
      $model = new Category();
      $categories = $model->getParentCategory();
      require_once 'views/category/add.php';
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
        header('Location: index.php?mod=category&act=list');
      }
    }

    function edit(){
      $id = $_GET['id'];
      $model = new Category();
      $categories = $model->getParentCategory();
      $category = $model->find($id);
      require_once 'views/category/edit.php';
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
        header('Location: index.php?mod=category&act=list');
      }
    }

    function delete(){
      $id = $_GET['id'];
      $model = new Category();
      $status = $model->delete($id);
      if($status==true){
        header('Location: index.php?mod=category&act=list');
      }
    }
  }
 ?>
