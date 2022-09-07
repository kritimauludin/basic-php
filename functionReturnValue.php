<?php
function sum(int $a, int $b)
{
    return $a + $b;
}

$result = sum(1, 2);
var_dump($result);

function getName(string $name, $filter)
{
    $filterName = $filter($name);
    echo "Helll $filterName" . PHP_EOL;
}

getName("kriti", "strtoupper");
