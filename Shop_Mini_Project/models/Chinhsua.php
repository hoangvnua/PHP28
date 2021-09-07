<?php
require_once 'models.php';

class Chinhsua extends models
{

    function __construct()
    {
        parent::__construct();
        $this->table = 'edit';
    }

}
?>