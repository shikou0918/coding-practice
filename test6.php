<?php
// 練習1
// アイテム数
$tool = fgets(STDIN);

// アイテムの単価
$price = fgets(STDIN);
$price_array = explode(" ", $price);

// 所持金とオーダー回数
$input_line = trim(fgets(STDIN));
list($money_in_possession, $order) = explode(" ", $input_line);

for ($i = 0; $i < $order; $i++) {
    $input_line = trim(fgets(STDIN));
    list($tool_number, $tool_count) = explode(" ", $input_line);

    if ($tool_number >= 1 && $tool_number <= $tool) {
        // 選択されたアイテムの価格を計算
        $total_price = $price_array[$tool_number - 1] * $tool_count;

        if ($money_in_possession >= $total_price) {
            $money_in_possession -= $total_price;
        } else {
            continue;
        }
    } else {
        echo "存在しないアイテム番号が指定されました。\n";
    }
}

echo $money_in_possession;

// 練習2
// 知りたい数と値
$input_line = fgets(STDIN);
list($number, $value) = explode(" ", $input_line);

// 数字を2進数に変換
$binary = decbin($value);
$binary_array = str_split($binary);
$binary_array_reverse = array_reverse($binary_array);

$result = [];
for ($i = 0; $i < $number; $i++) {
  $digit = fgets(STDIN);
  $result[] = $binary_array_reverse[$digit - 1];
  echo $result[$i] . "\n";
}

?>
