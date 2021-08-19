<?php
  require_once 'models.php';
  require_once 'UploadFile.php';
  class Category extends models{

    function __construct(){
      parent::__construct();
      $this->table = 'categories';
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
  }
 ?>
