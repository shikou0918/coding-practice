<?php
// 練習1
// // アイテム数
// $tool = fgets(STDIN);

// // アイテムの単価
// $price = fgets(STDIN);
// $price_array = explode(" ", $price);

// // 所持金とオーダー回数
// $input_line = trim(fgets(STDIN));
// list($money_in_possession, $order) = explode(" ", $input_line);

// for ($i = 0; $i < $order; $i++) {
//     $input_line = trim(fgets(STDIN));
//     list($tool_number, $tool_count) = explode(" ", $input_line);

//     if ($tool_number >= 1 && $tool_number <= $tool) {
//         // 選択されたアイテムの価格を計算
//         $total_price = $price_array[$tool_number - 1] * $tool_count;

//         if ($money_in_possession >= $total_price) {
//             $money_in_possession -= $total_price;
//         } else {
//             continue;
//         }
//     } else {
//         echo "存在しないアイテム番号が指定されました。\n";
//     }
// }

// echo $money_in_possession;

// 練習2
// 知りたい数と値
// $input_line = fgets(STDIN);
// list($number, $value) = explode(" ", $input_line);

// // 数字を2進数に変換
// $binary = decbin($value);
// $binary_array = str_split($binary);
// $binary_array_reverse = array_reverse($binary_array);

// $result = [];
// for ($i = 0; $i < $number; $i++) {
//   $digit = fgets(STDIN);
//   $result[] = $binary_array_reverse[$digit - 1];
//   echo $result[$i] . "\n";
// }

// 練習3
$buy = fgets(STDIN);

// 商品の種類ごとの合計購入金額を格納する連想配列を初期化
$purchase_amounts = [
    '食料品' => 0,
    '書籍' => 0,
    '衣類' => 0,
    'その他' => 0,
];

for ($i = 0; $i < $buy; $i++) {
    $input_line = fgets(STDIN);
    list($product_type, $product_price) = explode(" ", $input_line);

    switch ($product_type) {
        case 0:
            $purchase_amounts['食料品'] += $product_price;
            break;
        case 1:
            $purchase_amounts['書籍'] += $product_price;
            break;
        case 2:
            $purchase_amounts['衣類'] += $product_price;
            break;
        case 3:
            $purchase_amounts['その他'] += $product_price;
            break;
    }
}

// 各商品のポイント計算
$point_criteria = [
    '食料品' => 5,
    '書籍' => 3,
    '衣類' => 2,
    'その他' => 1,
];

$total_points = 0;

// 各商品のポイントを計算し、合計ポイントに加算
foreach ($purchase_amounts as $product_type => $total_amount) {
    $point_rate = $point_criteria[$product_type];
    $points = floor($total_amount / 100) * $point_rate; // 100円ごとにポイント計算
    $total_points += $points;
}

echo $total_points;


?>
