<?php
// cara 1
$data = array("data", "cara", "satu");
var_dump($data);

$values = ["KM", 1];
var_dump($values);

// menambah array
$values[] = "05";
var_dump($values);

// menghapus array
// ketika suatu index pada array dihapus, maka index tersebut akan hilang dan data akan loncat
unset($values[1]);
var_dump($values);

//menghitung panjang array
echo "Panjang Array values : ";
echo count($values);


// membuat map di php
$data = array(
    "id" => 1,
    "name" => "tes"
);

var_dump($data);
