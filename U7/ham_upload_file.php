<?php
  var_dump($_FILES);
  echo "<pre>";
    print_r($_FILES);
  echo "</pre>";

  if (!isset($_FILES['avatar'])) {
    echo "<br>File không tồn tại";
    die;
  }

  if ($_FILES['avatar']['error'] != 0) {
    echo "<br>Dữ liệu upload bị lỗi";
    die;
  }

  $target_dir = "images/";

  $target_file = $target_dir . basename($_FILES['avatar']['name']);

  echo "<br> $target_file";

  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  echo "<br>$imageFileType";

  $check = getimagesize($_FILES['avatar']['tmp_name']);

  echo "<pre>";
    print_r($check);
  echo "</pre>";

  if ($check !== false) {
    echo "<br>Đây là file ảnh - ".$check['mime'].".";
  }
  else {
    echo "<br>Không phải file ảnh";
  }

  if (file_exists($target_file)) {
    echo "<br>Tên file đã tồn tại trên server, không được ghi đè.";
  }
  else {
    echo "<br>Tên file chưa tồn tại trên sever.";
  }

  $file_size = $_FILES['avatar']['size'];
  echo "<br>Kích thước file ".$file_size." byte";

  $upload = move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);

  var_dump($upload);
 ?>
