<?php
// // 練習1
// function solveProblems($num_problems, $round_results) {
//     $solved_problems = array();

//     // 1周目と2周目で正解した問題を配列に追加
//     foreach ($round_results as $problem => $results) {
//         $first_round = $results[0];
//         $second_round = $results[1];

//         if ($first_round === "y" && $second_round === "y") {
//             continue;  // 1, 2周目で正解した問題は解かない
//         }

//         $solved_problems[] = $problem + 1;
//     }

//     echo count($solved_problems) . "\n";
//     foreach ($solved_problems as $problem) {
//         echo $problem . "\n";
//     }
// }

// // 問題数の入力
// $num_problems = intval(trim(fgets(STDIN)));

// // 正誤状況の入力
// $round_results = array();
// for ($i = 0; $i < $num_problems; $i++) {
//     $input = explode(" ", trim(fgets(STDIN)));
//     $round_results[$i] = $input;
// }

// // 3周目で解かなければならない問題の出力
// solveProblems($num_problems, $round_results);

// // 練習2
// function stringEnclose($input_line, $symbol) {
//     $length = strlen($input_line);

//     $top = str_repeat("+", $length + 2) . "\n";
//     $middle = "+" . $input_line . "+\n";
//     $bottom = str_repeat("+", $length + 2);
//     $result = $top . $middle . $bottom;
//     return $result;
// }

// $input_line = trim(fgets(STDIN));
// $result = stringEnclose($input_line, "+");
 // echo $result;

// 練習3
// function airTime($time) {
//     $day = date("d", $time);
//     $hour = date("H", $time);

//     if ($hour >= 25 ) {
//         $time
//     }

//     return $time;
// }


// $input_line = trim(fgets(STDIN));
// $hour = date("H", $input_line);
// // $time = date("m/d H:i", strtotime($input_line));

// echo $hour;

// $input_line = trim(fgets(STDIN));
// list($date, $time) = explode(" ", $input_line);

// $datetime = DateTime::createFromFormat("m/d H:i", $date . " " . $time);


// $hour = $datetime->format("H");

// echo $datetime;

// $date = trim(fgets(STDIN));
// // $hour = date("H", strtotime($date));
// echo $hour . "\n";

// echo date("m/d H:i", strtotime("+6 hours", strtotime($date))) . "\n";

// $date = trim(fgets(STDIN));

// list($datePart, $timePart) = explode(' ', $date);
// list($hourPart, $minPart) = explode(':', $timePart);
// list($monthPart, $dayPart) = explode('/', $datePart);

// if ($timePart >= "24:00") {
//     $daysToAdd = floor($hourPart / 24);
//     $hourPart = $hourPart % 24;
// }

// if (($hourPart > 0 || $minPart > 0) && $hourPart <= 9) {
//     $hourPart = '0' . $hourPart;
// }

// $datePart = $dayPart + $daysToAdd;
// $result = $monthPart . '/' . $datePart . ' ' . sprintf("%02d", $hourPart) . ':' . $minPart;

// echo $result;

// 練習4
// class Robot {
//     private $name = '';
//     public function setName($name) {
//         $this->name = (string)filter_var($name);
//     }
//     public function getName() {
//         return $this->name;
//     }
// }

// $a = new Robot;
// $a->setName('犬');

// echo $a->getName();

// 練習5
// function runningDistance ($meter){
//     $distance = $meter * 4;
//     echo $distance;
//   }

//   $meter= fgets(STDIN);
//   runningDistance($meter);

// 練習6

// $key_durability = explode(" ", trim(fgets(STDIN)));
// $input_text = trim(fgets(STDIN));

// $display_text = '';
// foreach (str_split($input_text) as $char) {
//     $key = ord(strtolower($char)) - ord('a');
//     if ($key_durability[$key] > 0) {
//         $display_text .= $char;
//         $key_durability[$key]--;
//     }
// }

// echo $display_text . "\n";

$users_number = trim(fgets(STDIN));

$users = [];
for ($i = 1; $i <= $users_number; $i++) {
  $user_name = trim(fgets(STDIN));
  $users[] = $user_name;
}

usort($users, "sortUsers");

function sortUsers($a, $b) {
  preg_match('/\d+$/', $a, $matches_a);
  preg_match('/\d+$/', $b, $matches_b);
  $number_a = isset($matches_a[0]) ? (int)$matches_a[0] : 0;
  $number_b = isset($matches_b[0]) ? (int)$matches_b[0] : 0;

  return $number_a - $number_b;
}

echo implode("\n", $users) . "\n";
?>
