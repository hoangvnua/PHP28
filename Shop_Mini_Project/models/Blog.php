<?php
require_once 'models.php';

class Blog extends models
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'blogs';
    }
}
?>