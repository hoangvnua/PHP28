<?php
  $name = array('Nam', 'Khánh', 'Hoàng', 'Hậu', 'Tuấn', 'Hoàng');
  var_dump(in_array('Khánh',$name));

  $index = array_search('Hoàng', $name);

    if ($index !== FALSE) {
      echo "<br>Vị trí phần tử là: ".($index+1);
    }else {
      echo "<br>Không tìm thấy phần tử";
    }


  echo "<br>Số lượng phần tử trong mảng là: ".count($name);

  $info = array(
    'ID' => '637728',
    'NAME' => 'Nguyễn Văn Hoàng',
    'PHONE' => '0842103986',
    'MAIL' => 'nvhoang.vnua@gmail.com'
  );

  if(array_key_exists('NAME', $info)) {
    echo "<br>Xin chào ".$info['NAME'];
  }

  $arr_result = array_count_values($name);
  echo "<pre>";
    print_r($arr_result);
  echo "</pre>";

  array_push($name, 'Thành');
  array_unshift($name, 'Thành');
  unset($name[1]);
  echo "<pre>";
    print_r($name);
  echo "</pre>";

  $value_delete = array_pop($name);
  echo "<br>".$value_delete;

  $value_delete = array_shift($name);
  echo "<br>".$value_delete;

 ?>
