<?php 
    require_once 'models.php';

    class User extends models{
        function __construct()
        {
            parent::__construct();
            $this->table = 'users';
        }

        public function login_user($email, $password){
            $sql = "SELECT * FROM ". $this->table." where email = '".$email."' and password = '".$password."' and level = 1";
            return $this->conn->query($sql)->fetch_assoc();
        }

        public function login_admin($email, $password){
            $sql = "SELECT * FROM ". $this->table." where email = '".$email."' and password = '".$password."' and level = 0";
            return $this->conn->query($sql)->fetch_assoc();
        }
    }
?>