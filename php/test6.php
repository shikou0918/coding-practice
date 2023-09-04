<?php
// 練習1
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

?>


?>
