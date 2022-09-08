<?php

$boolNumber = 0;
$say = null;

if ($boolNumber == 1) {
    $say = "TRUE";
} else {
    $say = "FALSE";
}
echo $say . PHP_EOL;

//ternary operator
$say2 = $boolNumber == 1 ? "TRUE" : "FALSE";
echo $say2 . PHP_EOL;
