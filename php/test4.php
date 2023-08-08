<?php
// 練習1
$x = trim(fgets(STDIN));

$total_days = 366;
$lucky_days = 0;

for ($day = 1; $day <= $total_days; $day++) {
  $date_string = strval($day);
  if (strpos($date_string, strval($X)) !== false) {
      $lucky_days++;
  }
}
echo $lucky_days;
?>
