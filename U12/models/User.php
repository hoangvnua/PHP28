<?php 
    require_once 'models.php';

    class User extends models{
        function __construct()
        {
            parent::__construct();
            $this->table = 'users';
        }

        public function login_data($email, $password){
            $sql = "SELECT * FROM ". $this->table." where email = '".$email."' and password = '".$password."'";
            return $this->conn->query($sql)->fetch_assoc();
        }
    }
?>