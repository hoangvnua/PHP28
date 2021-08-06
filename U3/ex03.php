<?php
  $chuoi = ' hello,Bạn-kHônG Ngủ à. ';
  echo "Chuỗi ban đầu: ".$chuoi;
  $thay = [',', '.', '_', '-', '+'];
  $doi = ' ';
  $thaydoi = str_replace($thay, $doi, $chuoi);
  $tolower = strtolower($thaydoi);
  $trim = trim($tolower);
  $ucfirst = ucfirst($trim);
  echo "<br><br>Chuỗi sau khi chuẩn hóa: ".$ucfirst;
 ?>
