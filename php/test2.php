<?php
// 練習1
// 渋滞は車間距離Mメートルから→100メートルまで定義
// 車の台数N→1000台まで
// $input_line = trim(fgets(STDIN));
// list($number_cars, $congestion_distance) = explode(" ", $input_line);


// // $number_carsの数-1回だけ標準入力を行う
// for ($i = 1; $i < $number_cars; $i++) {
//   $car_distance = trim(fgets(STDIN)); // 改行を取り除く

//   // 距離が$congestion_distance以下の場合のみ合計に加算
//   if ($car_distance <= $congestion_distance) {
//       $totalDistance += $car_distance;
//   }
// }

// echo $totalDistance;

// 練習2
$input_line = trim(fgets(STDIN));
list($number_applicants, $present_a, $present_b) = explode(" ", $input_line);

// 結果を保存する配列を初期化
$results = [];

for ($i = 1; $i <= $number_applicants; $i++) {
    $output = '';

    // Aの倍数かつBの倍数の場合は'AB'を追加
    if ($i % $present_a === 0 && $i % $present_b === 0) {
        $output .= 'AB';
    }
    // Aの倍数の場合は'A'を追加
    elseif ($i % $present_a === 0) {
        $output .= 'A';
    }
    // Bの倍数の場合は'B'を追加
    elseif ($i % $present_b === 0) {
        $output .= 'B';
    }
    // どちらにも当てはまらない場合は'N'を追加
    else {
        $output .= 'N';
    }

    // 結果を配列に追加
    $results[] = $output;
}

// 結果を改行区切りで出力
echo implode("\n", $results) . "\n";
?>
