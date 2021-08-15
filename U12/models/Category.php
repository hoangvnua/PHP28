<?php
  require_once 'models/Connection.php';
  class Category{
    var $conn;

    function __construct(){
      $connection = new Connection();
      $this->conn = $connection->conn;
    }

    function getAll(){
      $sql = 'SELECT * FROM categories';
      $results = $this->conn->query($sql);
      $categories = array();

      while ($row = $results->fetch_assoc()) {
        $categories[] = $row;
      }
      return $categories;
    }

    function getParentCategory(){
      $sql = 'SELECT id,cate_name,avatar,desception FROM categories WHERE parent_id is Null';
      $results = $this->conn->query($sql);
      $categories = array();

      while ($row = $results->fetch_assoc()) {
        $categories[] = $row;
      }
      return $categories;
    }

    function find($id){
      $sql = "SELECT * FROM categories WHERE id = ".$id;
      return $this->conn->query($sql)->fetch_assoc();
    }

    function insert($data){
      require_once 'common.php';

      $upload = uploadFile('thumbnail', 'images', array('jpg','jpeg','png','gif'), 2, true);
      if($upload[0] == true){
        if($_POST['parent_id'] != 0){
          $sql = "INSERT INTO categories (cate_name,desception,parent_id,thumbnail,slug)
          VALUES ('".$_POST['cate_name']."','".$_POST['description']."','".$_POST['parent_id']."','".$upload[1]."','".create_slug($_POST['name'])."')";
        }else{
          $sql = "INSERT INTO categories (cate_name,desception,thumbnail,slug)
          VALUES ('".$_POST['cate_name']."','".$_POST['description']."','".$upload[1]."','".create_slug($_POST['name'])."')";

        }
        return $this->conn->query($sql);
      }
      
    }


    function update($data){
      $sql = "UPDATE categories SET cate_name = '".$data['name']."', desception = '".$data['desception']."' WHERE id = ".$data['id'];
      return $this->conn->query($sql);
    }

    function delete($id){
      $sql = "DELETE FROM categories WHERE id = ".$id;
      return $this->conn->query($sql);
    }
  }
 ?>
