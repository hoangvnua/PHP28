<?php
  session_start();

  if (isset($_SESSION['thong_tin_sinh_vien'])) {
    $thong_tin_sinh_vien = $_SESSION['thong_tin_sinh_vien'];
  }

  foreach ($thong_tin_sinh_vien as $thong_tin_1_sinh_vien) {
    echo "<br>- Tên sinh viên: ".$thong_tin_1_sinh_vien['name'];
    if (isset($thong_tin_1_sinh_vien['gioi_tinh'])) {
      echo "<br>- Giới tính: ".$thong_tin_1_sinh_vien['gioi_tinh'];
    }
    echo "<br>- Sinh nhật: ".$thong_tin_1_sinh_vien['sinh_nhat'];
    echo "<br>- Quê quán: ".$thong_tin_1_sinh_vien['que_quan'];
    if (isset($thong_tin_1_sinh_vien['ngoai_ngu'])) {
      $ngoai_ngu_arr = $thong_tin_1_sinh_vien['ngoai_ngu'];
      $ngoai_ngu = "";
      foreach ($ngoai_ngu_arr as $val) {
        $ngoai_ngu .= $val . ",";
      }
      echo "<br>- Ngoại ngữ: ".$ngoai_ngu;
    }
    echo "<br>- Thông tin thêm: ".$thong_tin_1_sinh_vien['thong_tin_them']."<br>";
  }
 ?>
