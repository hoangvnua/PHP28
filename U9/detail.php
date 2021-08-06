<?php
  require_once('1.php');

  $id = (isset($_GET['id'])?$_GET['id']:0);

  $sql = "SELECT * FROM categories WHERE id = ".$id;

  $categories = $conn->query($sql)->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Tên danh mục: <?= $categories['cate_name'] ?></h1>
   </body>
 </html>
