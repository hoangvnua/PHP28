<?php 
    require_once 'models.php';
    require_once 'UploadFile.php';
    class posts extends models{

        function __construct(){
            parent::__construct();
            $this->table = 'posts';
        }

        function getParentPosts(){
            $sql = "SELECT id,title,short_contents,thumbail FROM posts WHERE category_id is Null";
            $results = $this->conn->query($sql);
            $posts = array();
            while ($row = $results->fetch_assoc()) {
              $posts[] = $row;
            }
            return $posts;
        }
    }
?>