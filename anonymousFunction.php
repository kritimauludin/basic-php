<?php
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Kriti", function (string $name): string {
    return strtoupper($name);
});
