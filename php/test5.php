<?php
$test_takers = trim(fgets(STDIN));

$test_taker_data = array();  // 受験者の情報を格納する二次元配列

for ($i = 0; $i < $test_takers; $i++) {
    $input_line = trim(fgets(STDIN));
    list($division, $english, $math, $science, $language, $geography) = explode(" ", $input_line);

    $test_taker_data[] = array(
        'division' => $division,
        'english' => intval($english),
        'math' => intval($math),
        'science' => intval($science),
        'language' => intval($language),
        'geography' => intval($geography)
    );
}

$pass = 0;
foreach ($test_taker_data as $data) {
    if ($data['division'] == "s") {
        if (array_sum($data) >= 350 && ($data['math'] + $data['science']) >= 160) {
            $pass++;
        }
    }
    if ($data['division'] == "l") {
        if (array_sum($data) >= 350 && ($data['language'] + $data['geography']) >= 160) {
            $pass++;
        }
    }
}

echo $pass . "\n";  // 通過した受験者の数を出力
?>
