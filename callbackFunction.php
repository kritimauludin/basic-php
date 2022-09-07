<?php
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Kriti", "strtoupper");
sayHello("Kriti", "strtolower");
sayHello("Kriti", function (string $name): string {
    return strtoupper($name);
});
sayHello("Kriti", fn ($name) => strtoupper($name));
