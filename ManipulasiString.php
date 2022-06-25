<?php

$name = "Christo Hermawan";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n"; 

// Konversi ke number dan sebaliknya

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

//Mengakses Karakater

$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

//Variable Parsing

$name = "Eko";
echo "Hello $name, Selamat Belajar" . PHP_EOL;
echo "Hello " . $name . ", Selamat Belajar" . PHP_EOL;

// Curly Brace

$var = "Christo";
echo "This is {$var}s" . PHP_EOL;

