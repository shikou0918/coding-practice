<?php
// 渋滞は車間距離Mメートルから→100メートルまで定義
// 車の台数N→1000台まで
$input_line = trim(fgets(STDIN));
list($number_cars, $congestion_distance) = explode(" ", $input_line);


// $number_carsの数-1回だけ標準入力を行う
for ($i = 1; $i < $number_cars; $i++) {
  $car_distance = trim(fgets(STDIN)); // 改行を取り除く

  // 距離が$congestion_distance以下の場合のみ合計に加算
  if ($car_distance <= $congestion_distance) {
      $totalDistance += $car_distance;
  }
}

echo $totalDistance;

?>
