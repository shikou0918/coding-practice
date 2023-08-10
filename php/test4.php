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
$input_line = trim(fgets(STDIN));
list($n, $d) = explode(" ", $input_line);

$wide = [];
for ($i = 1; $i < $n; $i++) {
  $first_sheet_onwards = trim(fgets(STDIN));
  $wide[] = $d - $first_sheet_onwards;
}
$sum = array_sum($wide) + $d;

print_r($sum * $d);
?>
