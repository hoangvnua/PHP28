<?php
$dayso = array(1, 23, 32, 5,43, 2, 13 ,153, 21,32 ,1);
//cách 1 dùng vòng lặp for
$max = null;
$vitri = null;

for ($i = 0; $i < count($dayso); $i++)
{
    if ($max == null){
        $max = $dayso[$i];
        $vitri = $i;
    }
    else {
        if ($dayso[$i] > $max){
            $max = $dayso[$i];
            $vitri = $i;
        }
    }
}

echo "Cách 1<br>Giá trị lớn nhất là $max, nằm tại vị trí $vitri";
//cách 2 dùng hàm
echo "<br><br>Cách 2<br>Số lớn nhất trong mảng là: ".max($dayso);
 ?>
