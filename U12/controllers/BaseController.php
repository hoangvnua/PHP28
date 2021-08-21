<?php
    class BaseController{
        public function view($view,$data = []){
            extract($data);

            require_once 'views/'.$view.".php";
        }

        public function redirect($path){
            header('Location: '.$path);
        }

        public function back(){
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
    }
?>