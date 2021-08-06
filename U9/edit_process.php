<?php
  require_once('1.php');

  $data = $_POST;

  $sql = "UPDATE categories SET cate_name = '".$data['name']."', desception = '".$data['desception']."' WHERE id = ".$data['id'];

  $status = $conn->query($sql);

  if ($status == true) {
    echo "thanh cong";
  } else {
    echo "that bai";
  }
 ?>
