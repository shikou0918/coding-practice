<?php
// 練習1
// $days = trim(fgets(STDIN));

// $total_time = [];
// for ($i = 1; $i <= $days; $i++) {
//   $input_line = trim(fgets(STDIN));
//   // 7 5 12 = 24時間滞在
//   // 10 6 20 = 20時間滞在
//   // 12 3 8= 31時間滞在
//   // [24, 20 ,30]
//   list($departure_time, $flight_time, $arrival_time) = explode(" ", $input_line);
//   $total_time[] = $departure_time + $flight_time + (24 - $arrival_time);
//   $maxValue = max($total_time); // 最大値を取得する
//   $minValue = min($total_time); // 最小値を取得する
// }

// echo $minValue . "\n";
// echo $maxValue . "\n";

// // 練習2
// $input_line = trim(fgets(STDIN));

// $calories = [];

// list($dishes, $job_hunting_students) = explode(" ", $input_line);
// for ($i = 1; $i <= $dishes; $i++) {
//   $calories[] = trim(fgets(STDIN));
// }

// $amount_dishes = [];

// for ($i = 1; $i <= $job_hunting_students; $i++) {
//   $amount_dishes[] = trim(fgets(STDIN));
//   $chunked_amount_dishes = array_chunk($amount_dishes, 3);
// }

// $results = [];


// foreach ($calories as $calorie) {
//   foreach ($chunked_amount_dishes as $amount_dish) {
//       echo "{$calorie} * {$amount_dish} = {$result}\n";
//       $results[] = $calorie * $amount_dish;
//   }
// }


// echo implode("\n", $results) . "\n";

// // 練習3
// $word_count = trim(fgets(STDIN));

// $words = array();
// for ($i = 1; $i <= $word_count; $i++) {
//   $words[] = trim(fgets(STDIN));
// }

// $num_words = count($words);
// $all_match = true; // すべての末尾と先頭の文字が一致するかを示すフラグ

// for ($i = 0; $i < $num_words - 1; $i++) {
//   $current_word = $words[$i];
//   $next_word = $words[$i + 1];

//   // $current_wordの末尾の文字と$next_wordの先頭の文字を比較
//   $current_last_char = substr($current_word, -1);
//   $next_first_char = $next_word[0];

//   if ($current_last_char !== $next_first_char) {
//     $all_match = false;
//     break;
//   }
// }

// if ($all_match) {
//   echo "Yes" . PHP_EOL;
// } else {
//   echo $current_last_char . " " . $next_first_char . PHP_EOL;
// }

// // 練習4
// $log_count = trim(fgets(STDIN));
// $extraction_target = trim(fgets(STDIN));

// $logs = [];
// for ($i = 1; $i <= $log_count; $i++) {
//     $logs[] = trim(fgets(STDIN));
// }

// function filter($logs, $target) {
//     $matchingWords = [];

//     foreach ($logs as $log) {
//         if (strpos($log, $target) !== false) {
//             $matchingWords[] = $log;
//         }
//     }

//     return $matchingWords;
// }

// $matchingWords = filter($logs, $extraction_target);

// if (count($matchingWords) > 0) {
//     foreach ($matchingWords as $word) {
//         echo $word . "\n";
//     }
// } else {
//     echo "None";
// }

// 練習5
// $input_line = trim(fgets(STDIN));
// list($food, $p, $q) = explode(" ", $input_line);

// $p = $p / 100;
// $q = $q / 100;

// $processing_unsold_food  = $food * (1 - $p);
// $unsold_food = $processing_unsold_food * (1 - $q);

// echo $unsold_food;

// 練習6
// $disliked_numbers = trim(fgets(STDIN));
// $hospital_room = trim(fgets(STDIN));

// $hospital_numbers = [];
// for ($i = 0; $i < $hospital_room; $i++) {
//   $hospital_numbers[] = trim(fgets(STDIN));
// }

// $results = [];
// foreach ($hospital_numbers as $number) {
//   if ($number !== $disliked_numbers && strpos((string)$number, $disliked_numbers) === false) {
//       $results[] = $number;
//   }
// }

// if ($results) {
//   echo implode("\n", $results) . "\n";
// } else {
//   echo 'none';
// }

// 練習7
// $input_line = trim(fgets(STDIN));
// list($first, $second) = explode(" ", $input_line);
// $n = trim(fgets(STDIN));

// for ($i = 0; $i < $n; $i++) {
//   $input_line2 = trim(fgets(STDIN));
//   list($a_first[], $b_second[]) = explode(" ", $input_line2);
// }

// foreach ($a_first as $index => $a) {
//   $b = $b_second[$index];
//   if ($a < $first || $a == $first && $second < $b) {
//     echo "High". "\n";
//   } else {
//     echo "Low". "\n";
//   }
// }

// 練習７
$input_line = trim(fgets(STDIN));
list($total_words, $page_words, $number_pages) = explode(" ", $input_line);

$input_line2 = trim(fgets(STDIN));
$words = explode(" ", $input_line2);
sort($words);

if (count($words) != $total_words) {
    echo "入力数が正しくありません。\n";
    exit;
}

// $page_words ごとに余った単語も含めて配列を分割
$word_pages = array_chunk($words, $page_words, true);


foreach ($word_pages[$number_pages - 1] as $value) {
    echo $value . "\n";
}

ini_set("memory_limit", -1);

function main($lines) {
  foreach ($lines as $index=>$value) {
    printf("line[%s]: %s\n", $index, $value);
  }
}

?>


