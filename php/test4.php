<?php
// 練習1
// $x = trim(fgets(STDIN));

// $total_days = 366;
// $lucky_days = 0;

// for ($day = 1; $day <= $total_days; $day++) {
//   $date_string = strval($day);
//   if (strpos($date_string, strval($X)) !== false) {
//       $lucky_days++;
//   }
// }
// echo $lucky_days;

// 練習2
// $input_line = trim(fgets(STDIN));
// list($n, $d) = explode(" ", $input_line);

// $wide = [];
// for ($i = 1; $i < $n; $i++) {
//   $first_sheet_onwards = trim(fgets(STDIN));
//   $wide[] = $d - $first_sheet_onwards;
// }
// $sum = array_sum($wide) + $d;

// print_r($sum * $d);

// 練習3
// $input_line = trim(fgets(STDIN));
// 店舗数と営業期間
// list($store, $business_period) = explode(" ", $input_line);

// 建設費用と人件費と利益
// $second_input_line = trim(fgets(STDIN));
// list($construction_costs, $labor_costs, $profit) = explode(" ", $second_input_line);

// $ramen_sales = [];
// for ($i = 0; $i < $store; $i++) {
//   $ramen_sales[] = trim(fgets(STDIN));
// }

// $negative_profit_count = 0;
// foreach ($ramen_sales as $sales) {
//   $net_profit = $profit * $sales - $construction_costs - $labor_costs * $business_period;
//   if ($net_profit < 0) {
//     $negative_profit_count++;
//   }
// }

// echo $negative_profit_count;

// 練習4
$input_line = trim(fgets(STDIN));
$str = str_replace('-', '', $input_line);
$telephone_number = str_split($str);

$array = [12, 3, 4, 5, 6, 7, 8, 9, 10, 11];

$matchingValues = [];

foreach ($telephone_number as $value) {
    if (isset($array[$value])) {
        $matchingValues[] = $array[$value];
    }
}

$sum = array_sum($matchingValues);

echo $sum * 2;


?>
