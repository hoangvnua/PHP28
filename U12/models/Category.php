<?php
  require_once 'models/Connection.php';
  require_once 'UploadFile.php';
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
      $sql = "INSERT INTO categories (cate_name,desception,avatar,parent_id) VALUES ('".$data['name']."','".$data['description']."','".$data['avatar']."','".$data['parent_id']."')";
      return $this->conn->query($sql);
    }


    function update($data){
      $sql = "UPDATE categories SET cate_name = '".$data['name']."', desception = '".$data['desception']."', avatar = '".$data['avatar']."', parent_id = '".$data['parent_id']."' WHERE id = ".$data['id'];
      return $this->conn->query($sql);
    }

    function delete($id){
      $sql = "DELETE FROM categories WHERE id = ".$id;
      return $this->conn->query($sql);
    }
  }
 ?>
