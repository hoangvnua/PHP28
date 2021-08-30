<?php 
    require_once 'models/Connection.php';

    class models{

        var $conn;
        var $table;

        function __construct(){
            $connection = new Connection();
            $this->conn = $connection->conn;
        }
      
        function getAll(){
            $sql = 'SELECT * FROM '.$this->table;
            $results = $this->conn->query($sql);
            $content_top_index = array();
      
            while ($row = $results->fetch_assoc()) {
              $content_top_index[] = $row;
            }
            return $content_top_index;
        }
      
        function find($id){
            $sql = "SELECT * FROM ".$this->table." WHERE id = ".$id;
            return $this->conn->query($sql)->fetch_assoc();
        }
      
        function insert($data){
            $keys="";
            $values="";
            foreach ($data as $key => $value) {
                $keys .= $key.",";
                $values .= "'".$value."',";
            }
            $keys = trim($keys,',');
            $values = trim($values,',');
            $sql = "INSERT INTO ".$this->table." (".$keys.") VALUES (".$values.")";
            return $this->conn->query($sql);
        }
      
      
        function update($data){
            $values = "";
            foreach ($data as $key => $value) { 
                $values .= $key."='".$value."',";
            }
            $values = trim($values,',');
            $sql = "UPDATE ".$this->table." SET ".$values." WHERE id = ".$data['id'];

            return $this->conn->query($sql);
        }
      
        function delete($id){
            $sql = "DELETE FROM ".$this->table." WHERE id = ".$id;
            return $this->conn->query($sql);
        }
        
    }
?>