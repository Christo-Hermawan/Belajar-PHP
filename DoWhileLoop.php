<?php

/* DoWhileLoop mirip While tapi pengecekan kondisi perulangan
dilakukan setelah perulangan dilakukan, maka dalam do while 
minimal sekali perulangan dilakukan walaupun tidak bernilai true*/

$counter = 1;

do {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <=10);

echo "\n";

$counter = 100;

do {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <=10);