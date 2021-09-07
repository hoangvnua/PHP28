<?php
require_once 'models.php';
class Category extends models
{

  function __construct()
  {
    parent::__construct();
    $this->table = 'categories';
  }
  
  function get8sp(){
    $sql = 'SELECT * FROM categories limit 8';
    $results = $this->conn->query($sql);
    $content = array();

    while ($row = $results->fetch_assoc()) {
      $content[] = $row;
    }
    return $content;
  }

  function getNew()
  {
    $sql = 'SELECT * FROM categories WHERE status = 1 limit 8';
    $results = $this->conn->query($sql);
    $content = array();

    while ($row = $results->fetch_assoc()) {
      $content[] = $row;
    }
    return $content;
  }

  function getSale()
  {
    $sql = 'SELECT * FROM categories WHERE status = 2 limit 8';
    $results = $this->conn->query($sql);
    $content = array();

    while ($row = $results->fetch_assoc()) {
      $content[] = $row;
    }
    return $content;
  }

  function getHot()
  {
    $sql = 'SELECT * FROM categories WHERE status = 3 limit 8';
    $results = $this->conn->query($sql);
    $content = array();

    while ($row = $results->fetch_assoc()) {
      $content[] = $row;
    }
    return $content;
  }
}
