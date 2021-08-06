<?php
  session_start();
  $product = array();
  if (isset($_SESSION['product'])) {
    $product = $_SESSION['product'];
  }

  $key = $_GET['id'];

  if($key !=""){
    $product = $product[$key];

    if(isset($_SESSION['cart'][$key])){
      $_SESSION['cart'][$key]['product_amount']++;
    }
    else {
      $_SESSION['cart'][$key] = $_SESSION['product'][$key];
      $_SESSION['cart'][$key]['product_amount'] = 1;
    }
  }


  header('Location: cart.php');
 ?>
