<?php
  $array_info = array();

  $array_info[0][0] = 10;
  $array_info[0][1] = 20;
  $array_info[0][2] = 30;

  $array_info[1][0] = 40;
  $array_info[1][1] = 50;
  $array_info[1][2] = 60;

  $array_info[2][0] = 70;
  $array_info[2][1] = 80;
  $array_info[2][2] = 90;

  $array_sub = array('PHP Basic', array(2,3));
  $array_info[2][2] = $array_sub;
  echo "<pre>";
    print_r($array_info);
  echo "</pre>";

  echo "<br>".$array_info[1][2];

  echo "<br>".$array_info[2][2][0];
?>
