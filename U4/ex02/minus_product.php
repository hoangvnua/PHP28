<?php
  session_start();

  $key = $_GET['id'];
  if ($_SESSION['cart'][$key]['product_amount'] > 1) {
    $_SESSION['cart'][$key]['product_amount'] = $_SESSION['cart'][$key]['product_amount'] - 1;
  }
  else {
    unset($_SESSION['cart'][$key]);
  }



  header('Location: cart.php');
?>
