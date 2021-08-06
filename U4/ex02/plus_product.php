<?php
  session_start();

  $key = $_GET['id'];
  $_SESSION['cart'][$key]['product_amount'] = $_SESSION['cart'][$key]['product_amount'] + 1;

  header('Location: cart.php');
?>
