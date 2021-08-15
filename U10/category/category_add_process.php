<?php
    require_once('connection.php');
    require_once('common.php');

    $upload = uploadFile('thumbnail', 'images', array('jpg','jpeg','png','gif'), 2, true);
    if($upload[0] == true){
      if($_POST['parent_id'] != 0){
        $sql = "INSERT INTO categories (name,desception,parent_id,thumbnail,slug)
        VALUES ('".$_POST['name']."','".$_POST['description']."','".$_POST['parent_id']."','".$upload[1]."','".create_slug($_POST['name'])."')";
      }else{
        $sql = "INSERT INTO categories (name,desception,thumbnail,slug)
        VALUES ('".$_POST['name']."','".$_POST['description']."','".$upload[1]."','".create_slug($_POST['name'])."')";

      }

      $status = $conn->query($sql);

      if($status==true){
        header("Location: categories.php");
      }else{

      }
    }else{

    }


 ?>
