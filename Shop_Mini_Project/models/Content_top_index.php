<?php
require_once 'models.php';

class Content_top_index extends models
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'content_top_index';
    }
}
?>