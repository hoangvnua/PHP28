<?php
  session_start();
  if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $password = $_POST['pwd'];

    if ($user == 'admin' & $password == '123456') {
      $_SESSION['isLogin'] = true;
      header('Location: product_list.php');
    } else {
      header('Location: login.php');
      setcookie('msg', 'Đăng nhập thất bại', time()+10);
    }
  }
 ?>
