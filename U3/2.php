<?php
    $array_name = array('Hoang', 17, 9.5, 88, 'hello');
    echo "<pre>";
      print_r($array_name);
    echo "</pre>";

    unset($array_name[1]);
    array_splice($array_name,1,1);
    $array = array_diff($array_name,['hello']);

    echo "<pre>";
      print_r($array_name);
    echo "</pre>";
    echo "<pre>";
      print_r($array);
    echo "</pre>";
 ?>
