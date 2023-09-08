<?php
// 練習1
$input_line = trim(fgets(STDIN));
list($students, $questions) = explode(" ", $input_line);

for ($i = 0; $i < $students; $i++) {
    $input_line = trim(fgets(STDIN));
    list($day, $correct_answers) = explode(" ", $input_line);

    $students_results[] = array(
        'day' => $day,
        'correct_answers' => $correct_answers
    );
}

$score = 100 / $questions;
foreach ($students_results as $students_result) {
    $total_score = $score * $students_result['correct_answers'];

    if ($students_result['day'] > 0 && $students_result['day'] < 10) {
      $total_score = $score * $students_result['correct_answers'] * 0.8;
      $total_score = round($total_score); // 切り捨てて合計得点を計算
    } elseif ($students_result['day'] >= 10) {
      $total_score = 0;
    }
    if ($total_score >= 80) {
        echo "A\n";
    } elseif ($total_score >= 70) {
        echo "B\n";
    } elseif ($total_score >= 60) {
        echo "C\n";
    } else {
        echo "D\n";
    }
}

// 練習2
$input_line = trim(fgets(STDIN));
list($train_fare, $one_night, $days) = explode(" ", $input_line);

$internship_periods = array(); // インターンシップ期間の配列を初期化

for ($i = 0; $i < $days; $i++) {
    $input_line = trim(fgets(STDIN));
    list($first_day, $last_day) = explode(" ", $input_line);
    $internship_period = array(
        'first_day' => $first_day,
        'last_day' => $last_day
    );
    $internship_periods[] = $internship_period; // 期間情報を配列に追加
}

$total_price = $train_fare * 2;

$result = [];

for ($i = 0; $i < count($internship_periods) - 1; $i++) {
    $current_last_day = $internship_periods[$i]['last_day'];
    $next_first_day = $internship_periods[$i + 1]['first_day'];

    // 今のインターンから次のインターンまでの日数
    $difference_day = $next_first_day - $current_last_day;

    // 次のインターンまでの宿泊費
    $total_one_night = $difference_day * $one_night;

    // 一度帰宅した時の往復の交通費
    $total_train_fare = $train_fare * 2;

    // 比較して低い方を$total_priceに加算
    $total_price += min($total_one_night, $total_train_fare);
}

// 結果を表示
echo $total_price;

?>
