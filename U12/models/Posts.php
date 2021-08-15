<?php 
    require_once 'models/Connection.php';
    class posts{
        var $conn;

        function __construct(){
            $connection = new Connection();
            $this->conn = $connection->conn;
        }

        function getAll(){
            $sql = 'SELECT * FROM posts';
            $results = $this->conn->query($sql);
            $posts = array();
      
            while ($row = $results->fetch_assoc()) {
              $posts[] = $row;
            }
            return $posts;
        }

        function getParentPosts(){
            $sql = 'SELECT id,title,avatar,desception FROM categories WHERE parent_id is Null';
            $results = $this->conn->query($sql);
            $categories = array();
      
            while ($row = $results->fetch_assoc()) {
              $categories[] = $row;
            }
            return $categories;
        }

        function find($id){
            $sql = "SELECT * FROM posts WHERE id = ".$id;
            return $this->conn->query($sql)->fetch_assoc();
        }

        function insert($data){
            $sql = "INSERT INTO posts (title,short_contents,thumbail) VALUES ('".$data['name']."','".$data['description']."')";
            return $this->conn->query($sql);
          }

        function delete($id){
            $sql = "DELETE FROM posts WHERE id = ".$id;
            return $this->conn->query($sql);
        }
    }
?>