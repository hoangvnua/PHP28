<?php
require_once 'models.php';

class Designer extends models
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'designer';
    }
}
?>