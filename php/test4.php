<?php
// <?php namespace Track;
// ini_set("memory_limit", -1);

// function main($lines) {
//   foreach ($lines as $index=>$value) {
//     printf("line[%s]: %s\n", $index, $value);
//   }
// }

// $array = array();
// while (true) {
//   $stdin = fgets(STDIN);
//   if ($stdin == "") {
//     break;
//   }
//   $array[] = rtrim($stdin);
// }
// main($array);


// $participants = trim(fgets(STDIN));

// $initials = array();
// for ($i = 1; $i <= $participants; $i++) {
//   $input = trim(fgets(STDIN));
//   $initials[] = explode(" ", $input);
// }

// function findMaxPairs($initials) {
//     $pairs = [];
//     foreach ($initials as $initial) {
//         $ai = $initial[0];
//         $bi = $initial[1];
//         $pairFound = false;
//         foreach ($initials as $pairInitial) {
//             if ($bi === $pairInitial[0] && $ai === $pairInitial[1]) {
//                 $pairFound = true;
//                 break;
//             }
//         }
//         if ($pairFound && !isset($pairs[$ai])) {
//             $pairs[$ai] = true;
//         }
//     }
//     return count($pairs);
// }

// echo findMaxPairs($initials);


$participants = trim(fgets(STDIN));

$initials = array();
for ($i = 1; $i <= $participants; $i++) {
  $input = trim(fgets(STDIN));
  $initials[] = explode(" ", $input);
}

$pairs = 0;
for ($i = 0; $i < count($initials) -1; $i++) {
  $left = substr($initials[$i][0], -1);
  $right = substr($initials[0][$i + 1], 0, 1);

  if ($left == $right) {
    $pairs++;
  }
}

echo $pairs;

?>
