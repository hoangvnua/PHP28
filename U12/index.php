<?php
  $mod = $_GET['mod'];
  $act = $_GET['act'];

  switch ($mod) {
    case 'category':
      require_once 'controllers/CategoryController.php';
      $cate = new CategoryController();
      switch ($act){
        case 'list':
          $cate->list();
          break;
        case 'create':
          $cate->create();
          break;
        case 'store':
          $cate->store();
          break;
        case 'edit':
          $cate->edit();
          break;
        case 'update':
          $cate->update();
          break;

        case 'detail':
          $cate->detail();
          break;
        case 'delete':
          $cate->delete();
          break;

        default:
          echo "Không tồn tại action này";
          break;
      }
      break;
    case 'posts':
      require_once 'controllers/PostsController.php';
      $ps = new PostsController();
      switch($act){
        case 'list':
          $ps->list();
          break;
        case 'detail':
          $ps->detail();
          break;
        case 'delete':
          $ps->delete();
          break;
        case 'create':
          $ps->create();
          break;
      }
      break;
    default:
      // code...
      break;
  }
?>
