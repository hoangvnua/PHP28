<?php
require_once 'models.php';

class Header extends models
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'header';
    }

    function getMenu()
    {
        $sql = 'SELECT * FROM header where status = 1';
            $results = $this->conn->query($sql);
            $content = array();
      
            while ($row = $results->fetch_assoc()) {
              $content[] = $row;
            }
            return $content;
    }

    function getTitleHeader()
    {
        $sql = 'SELECT * FROM header where status = 2';
            $results = $this->conn->query($sql);
            $content = array();
      
            while ($row = $results->fetch_assoc()) {
              $content[] = $row;
            }
            return $content;
    }
}
?>