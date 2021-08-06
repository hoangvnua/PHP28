<?php
  require_once('1.php');

  $id = (isset($_GET['id'])?$_GET['id']:0);

  $sql = "DELETE FROM categories WHERE id = ".$id;

  $status = $conn->query($sql);

  header("Location: hienthi1.php");
 ?>
