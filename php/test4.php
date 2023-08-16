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
// $input_line = trim(fgets(STDIN));
// $str = str_replace('-', '', $input_line);
// $telephone_number = str_split($str);

// $array = [12, 3, 4, 5, 6, 7, 8, 9, 10, 11];

// $matchingValues = [];

// foreach ($telephone_number as $value) {
//     if (isset($array[$value])) {
//         $matchingValues[] = $array[$value];
//     }
// }

// $sum = array_sum($matchingValues);

// echo $sum * 2;

// 練習5
// $input_line = trim(fgets(STDIN));
// list($first, $second) = explode(" ", $input_line);
// $n = trim(fgets(STDIN));

// for ($i = 0; $i < $n; $i++) {
//   $input_line2 = trim(fgets(STDIN));
//   list($a_first[], $b_second[]) = explode(" ", $input_line2);
// }

// foreach ($a_first as $a) {
//   if ($a < $first || $a == $first && $second < $b) {
//     echo "High" . "\n"
//   } else {
//     echo "Low"
//   }
// }
// print_r($a_first);

// 練習5
// $input_line = trim(fgets(STDIN));
// list($days, $buy, $sell) = explode(" ", $input_line);

// $stock_prices = [];
// for ($i = 0; $i < $days; $i++) {
//     $stock_prices[] = trim(fgets(STDIN));
// }

// // 持ち株
// $total_stock = 0;

// // 利益
// $profit = 0;
// foreach ($stock_prices as $stock_price) {
//     if ($stock_price <= $buy) {
//         $total_stock++;
//         $profit -= $stock_price; // 買いの場合、損益を減算
//     } elseif ($stock_price >= $sell) {
//         $profit += $stock_price * $total_stock; // 売りの場合、損益を加算
//         $total_stock = 0;
//     }
// }

// // N 日目には持ち株を売る
// $profit += $stock_price * $total_stock;

// echo $profit;

// 練習6
$input_line = trim(fgets(STDIN));
list($kinds, $times) = explode(" ", $input_line);

$bus_times = [];
for ($i = 0; $i < $kinds; $i++) {
  $bus_times[] = trim(fgets(STDIN));
}

$closest = [];
foreach ($bus_times as $bus_time) {
    $diff = abs($bus_time - $times);
    $closest[] = array($diff, $bus_time);
}
sort($closest);

$minDiff = min(array_column($closest, 0));

$closestBusesWithMinDiff = array();
foreach ($closest as $bus) {
    if ($bus[0] === $minDiff) {
        $closestBusesWithMinDiff[] = $bus;
    }
}

$minTimeBuses = array_column($closestBusesWithMinDiff, 1);

foreach ($minTimeBuses as $minTimeBus) {
  echo $minTimeBus . "\n";
}
?>
