<?php
    require_once 'controllers/BaseController.php';
    require_once 'models/User.php';
    class AuthController extends BaseController{
        public function login(){
            $data = $_POST;

            $user = new User();
            $client = $user->login_user($data['email'],md5($data['password']));

            $admin = $user->login_admin($data['email'],md5($data['password']));


            if ($client){
                $_SESSION['auth'] = $client;
                $_SESSION['is_login']= true;
                $this->redirect('?admin=client&mod=home&act=home');
            } elseif($admin){
                $_SESSION['auth'] = $admin;
                $_SESSION['is_login']= true;
                $this->redirect('?admin=admin&mod=admin&act=list');
            } else {
                $this->back();
            }
        }

        public function getFormLogin(){
            if (isset($_SESSION['is_login'])){
                $this->redirect('?admin=admin&mod=admin&act=list');
            }
            $this->view('auth/login');
        }

        public function logout(){
            unset($_SESSION['auth']);
            unset($_SESSION['is_login']);
            $this->redirect('index.php?admin=auth&mod=auth&act=getFormLogin');
        }
    }
?>