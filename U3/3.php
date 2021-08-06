<?php
$array_name = array('Hoang', 17, 9.5);

$array_infor = array();
$array_infor['MSV'] = 637728;
$array_infor['hten'] = 'Nguyễn Văn Hoàng';

foreach ($array_name as $key => $value) {
  echo "<br> Key: ". $key." - Value: ".$value."";
}
?>
