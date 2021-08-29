<?php
    require_once 'controllers/BaseController.php';
    require_once 'models/User.php';
    class AuthController extends BaseController{
        public function login(){
            $data = $_POST;

            $model = new User();
            $user = $model->login_data($data['email'],md5($data['password']));

            if ($user){
                $_SESSION['auth'] = $user;
                $_SESSION['is_login']= true;
                $this->redirect('?admin=client&mod=home&act=home');
            } else {
                $this->back();
            }
        }

        public function getFormLogin(){
            if (isset($_SESSION['is_login'])){
                $this->redirect('?admin=client&mod=home&act=home');
            }
            $this->view('auth/login');
        }

        public function logout(){
            $_SESSION['auth'] = null;
            $_SESSION['is_login'] = false;
            $this->redirect('index.php?admin=auth&mod=auth&act=login_form');
        }
    }
?>