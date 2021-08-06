<?php
  session_start();
  $product = $_POST;

  $_SESSION['product'][$_POST['product_code']] = $product;

  header('Location: index.php');
 ?>
