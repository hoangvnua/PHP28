<?php
  $info = array();

  $info[] = array(
    'ID' => '637728',
    'NAME' => 'Nguyễn Văn Hoàng',
    'PHONE' => '0842103986',
    'MAIL' => 'nvhoang.vnua@gmail.com'
  );
  $info[] = array(
    'ID' => '637764',
    'NAME' => 'Nguyễn Văn Thành',
    'PHONE' => '0888888888',
    'MAIL' => 'nvthanh.vnua@gmail.com'
  );

  echo "<pre>";
    print_r($info);
  echo "</pre>";

  echo "<br>Xin chào ".$info[0]['NAME'];

  foreach ($info as $key => $student) {
    echo "<br>";
    echo "<br>- Thông tin sinh viên thứ ".($key+1);
    echo "<br>- Mã sinh viên: ".$student['ID'];
    echo "<br>- Họ tên sinh viên: ".$student['NAME'];
    echo "<br>- Số điện thoại: ".$student['PHONE'];
    echo "<br>- Email: ".$student['MAIL'];
  }

 ?>
