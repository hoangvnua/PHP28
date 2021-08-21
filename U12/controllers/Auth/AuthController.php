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
                $this->redirect('?mod=category&act=list');
            }
            else {
                $this->back();
            }
        }

        public function getFormLogin(){
            if ($_SESSION['is_login']){
                $this->redirect('?mod=category&act=list');
            }
            $this->view('auth/login');
        }

        public function logout(){
            $_SESSION['auth'] = null;
            $_SESSION['is_login'] = false;
            $this->redirect('?mod=auth&act=login_form');
        }
    }
?>