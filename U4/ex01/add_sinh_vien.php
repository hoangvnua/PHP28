<?php
  session_start();
  $thong_tin_sinh_vien = $_POST;

  $_SESSION['thong_tin_sinh_vien'][] = $thong_tin_sinh_vien;

  header('Location: thong_tin_sinh_vien.php');
 ?>
