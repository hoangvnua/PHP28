<?php
  require_once('1.php');

  $data = $_POST;

  $sql = "INSERT INTO categories (cate_name, desception, avatar) VALUES ('".$data['name']."','".$data['desception']."','".$data['avatar']."')";

  $status = $conn->query($sql);

  if ($status == true) {
    header("Location: hienthi1.php");
  } else {
    header("Location: add.php");
  }
 ?>
