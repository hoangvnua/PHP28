<?php
require_once 'models.php';

class Style extends models
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'style';
    }

    function getCustom()
    {
        $sql = 'SELECT * FROM style where status = 1';
            $results = $this->conn->query($sql);
            $content = array();
      
            while ($row = $results->fetch_assoc()) {
              $content[] = $row;
            }
            return $content;
    }
    function getStyle(){
        $sql = 'SELECT * FROM style where status = 2';
            $results = $this->conn->query($sql);
            $content = array();
      
            while ($row = $results->fetch_assoc()) {
              $content[] = $row;
            }
            return $content;
    }
}
?>