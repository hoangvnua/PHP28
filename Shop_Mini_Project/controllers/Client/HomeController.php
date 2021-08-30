<?php

use HomeController as GlobalHomeController;

require_once 'controllers/BaseController.php';
require_once 'models/Content_top_index.php';

class HomeController extends BaseController {

    public function __construct()
    {
        if (!$_SESSION['is_login']) {
            $this->redirect('?admin=auth&mod=auth&act=getFormLogin');
        }
    }

    function home()
    {
        $model = new Content_top_index();
        $content_top_index = $model->getAll();
        //Đổ lên view
        $this->view('home/home', [
            'content_top_index' => $content_top_index
        ]);
    }
}
?>