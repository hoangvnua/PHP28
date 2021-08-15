<?php
  require_once('connection.php');
  $slug_id =(isset($_GET['id'])?$_GET['id']:0) ;
  $id = explode('.',  $slug_id)[1];
  if($id==0){
    echo "Không hợp lệ!";
  }

  $sql = "SELECT * FROM categories WHERE id = ".$id;

  $category = $conn->query($sql)->fetch_assoc();

  echo "<pre>";
    print_r($category);
  echo "</pre>";

 ?>
