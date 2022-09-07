<?php
$total = 500000;
$kembali = 100000;

$anonymousFunction =  function () use ($total, $kembali): string {
    return "Total Bayar $total , kembali $kembali" . PHP_EOL;
};

$arrowFunction = fn () => "Total Bayar $total , kembali $kembali" . PHP_EOL;
echo $anonymousFunction();
echo $arrowFunction();
