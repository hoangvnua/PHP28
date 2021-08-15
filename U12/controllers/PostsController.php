<?php 
    require_once 'models/Posts.php';
    class PostsController{
        function list(){
            $model = new Posts();
            $posts = $model->getAll();
            require_once 'views/posts/list.php';
        }

        function detail(){
            $id = $_GET['id'];
            $model = new Posts();
            $posts = $model->find($id);
            require_once 'views/posts/detail.php';
        }

        function create(){
            $model = new Posts();
            $categories = $model->getParentPosts();
            require_once 'views/posts/add.php';
          }
      
        function store(){
            $data = $_POST;
            $model = new Posts();
            $status = $model->insert($data);
            if($status==true){
              header('Location: index.php?mod=posts&act=list');
            }
        }

        function delete(){
            $id = $_GET['id'];
            $model = new Posts();
            $stastus = $model->delete($id);
            if($stastus==true){
                header('Location: index.php?mod=posts&act=list');
            }
        }
    }
?>