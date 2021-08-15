<?php
  require_once 'Connection.php';
  class Category
  {
    var $name;
    var $parent_id;
    var $thumbnail;
    var $slug;
    var $description;

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

    function find($id){
      $sql = "SELECT * FROM categories WHERE id = ".$id;
      return $this->conn->query($sql)->fetch_assoc();
    }

    function insert(){

    }


    function update(){

    }

    function delete(){
      $sql = "DELETE FROM categories WHERE id = ".$id;
      return $this->conn->query($sql);
    }
  }

  $cate = new Category();
  $categories = $cate->getAll();
  // echo "<pre>";
  //   print_r($categories);
  // echo "</pre>";

  $category = $cate->find(1);
  echo "<pre>";
    print_r($category);
  echo "</pre>";
 ?>
