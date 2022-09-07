<?php

function faktorial(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * faktorial($value - 1);
    }
}
var_dump(faktorial(5)) . PHP_EOL;

function loop(int $value)
{
    if ($value == 0) {
        echo "end loop" . PHP_EOL;
    } else {
        echo "loop ke $value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);
