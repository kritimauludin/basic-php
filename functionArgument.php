<?php
function hello($name = "tidak dikenal")
{
    echo "$name" . PHP_EOL;
}
hello();
hello("kriti");

function sum(int $a, int $b)
{
    $total = $a + $b;
    echo $total . PHP_EOL;
}

sum(100, 100);

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 5, 6, 8);
sumAll(...[10, 5, 6, 8]);
