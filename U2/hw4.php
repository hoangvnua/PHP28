<?php
  $n = 100;
  $tong = 0;

  for ($i=1; $i <=$n ; $i++) {
    $tong += 1/$i;
  }
  echo "1 + 1/2 +...+ 1/100 = " . $tong;
 ?>
