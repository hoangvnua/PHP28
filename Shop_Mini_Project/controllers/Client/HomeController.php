<?php
require_once 'controllers/BaseController.php';
class HomeController extends BaseController
{

    public function __construct()
    {
        if (!$_SESSION['is_login']) {
            $this->redirect('?admin=auth&mod=auth&act=getFormLogin');
        }
    }
    function home()
    {
        $this->view('home/home', []);
    }
}
