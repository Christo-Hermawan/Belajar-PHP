<?php

// merepresentasikan variable tanpa nilai

$name = "Ben";
$name = NULL;

$age = null;

echo "Name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age;
echo "\n";


// is_null($variable) 
// untuk mengecek apakah variable kosong


echo "Is name null? : ";
var_dump (is_null($name));
echo is_null($name); // 1 = true 
echo "\n";

// unset($variable) - untuk menghapus variable

$contoh = "OK";
//unset($contoh);

echo($contoh);
echo "\n";

// isset($variable) - untuk mengecek apakah variable ada
$i = "Ada";
$i = null;
var_dump(isset($i));