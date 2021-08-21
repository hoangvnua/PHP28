<?php
  session_start();

  $mod = (isset($_GET['mod'])?$_GET['mod']:'category');
	$act = (isset($_GET['act'])?$_GET['act']:'list');

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
        case 'store':
          $ps->store();
          break;
        case 'edit':
          $ps->edit();
          break;
        case 'update':
          $ps->update();
          break;
        case 'delete':
          $ps->delete();
          break;
        case 'create':
          $ps->create();
          break;
      }
      break;

      case 'auth':
        require_once 'controllers/Auth/AuthController.php';
        $auth = new AuthController();
        switch($act){
          case 'login_form':
            $auth->getFormLogin();
            break;
          case 'login':
            $auth->login();
            break;
          case 'logout':
            $auth->logout();
            break;
        }
        break;
    default:
      // code...
      break;
  }
?>
