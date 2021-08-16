<?php 
    require_once 'models/Connection.php';
    require_once 'UploadFile.php';
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
            $sql = 'SELECT id,title,short_contents,thumbail FROM posts WHERE category_id is Null';
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
            $sql = "INSERT INTO posts (title,short_contents,thumbail,category_id) VALUES ('".$data['title']."','".$data['contents']."','".$data['thumbail']."','".$data['category_id']."')";
            return $this->conn->query($sql);
        }

        function update($data){
            $sql = "UPDATE posts SET title = '".$data['title']."', short_contents = '".$data['contents']."', thumbail = '".$data['thumbail']."', category_id = '".$data['category_id']."' WHERE id = ".$data['id'];
            return $this->conn->query($sql);
        }

        function delete($id){
            $sql = "DELETE FROM posts WHERE id = ".$id;
            return $this->conn->query($sql);
        }
    }
?>