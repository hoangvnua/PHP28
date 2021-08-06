<?php
  $array_name = array('Hoang', 17, 9.5);

  $array_infor = array();
  $array_infor['MSV'] = 637728;
  $array_infor['hten'] = 'Nguyễn Văn Hoàng';

echo "<pre>";
  echo "In phần tử trong mảng";
  //in phần tử trong mảng
  echo "<br>".$array_name[0];
  echo "<br>Xin chào ".$array_infor['hten'];
  echo "<br>Mã sinh viên của bạn là: ".$array_infor['MSV'];
  //in phần tử trong mảng dùng hàm
  echo "<br><br>";
  var_dump($array_name);
  echo "<br>";
  print_r($array_infor);
echo "</pre>";

  echo "Đọc dữ liệu từ mảng dùng vòng lặp";
  for ($i=0; $i < count($array_name) ; $i++) {
    echo "<br> ".$array_name[$i];
  }
?>
