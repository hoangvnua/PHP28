<?php
  require_once('connection.php');
  require_once('common.php');
  $data = $_POST;
  $sql="";
  if(isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error']>0){
    if($_POST['parent_id'] != 0){
      $sql = "UPDATE categories SET name='".$data['name']."',parent_id='".$data['parent_id']."', description ='".$data['description']."' WHERE id= ".$data['id'];
    }else{
      $sql = "UPDATE categories SET name='".$data['name']."', description ='".$data['description']."' WHERE id= ".$data['id'];
    }
  }else{
    $upload = uploadFile('thumbnail', 'images', array('jpg','jpeg','png','gif'), 2, true);
    if($upload[0] == true){
      if($_POST['parent_id'] != 0){
        $sql = "UPDATE categories SET name='".$data['name']."',parent_id='".$data['parent_id']."', description ='".$data['description']."', thumbnail='".$upload[1]."' WHERE id= ".$data['id'];
      }else{
        $sql = "UPDATE categories SET name='".$data['name']."', description ='".$data['description']."', thumbnail='".$upload[1]."' WHERE id= ".$data['id'];
      }
    }else{

    }
  }

  $status = $conn->query($sql);

  if($status==true){
    header("Location: categories.php");
  }else{

  }

 ?>
