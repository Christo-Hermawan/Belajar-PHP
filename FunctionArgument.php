<?php

// Mengirim informasi ke function yang ingin dipanggil
// argument ditempatkan dalam kurung() dideklarasi funtion
// argument bisa lebih dari 1, dipisahkan tanda koma

function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Eko");

echo "\n";

// Default Argument Value

function Hello($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

Hello();
Hello("Eko");

echo "\n";

// Kesalahan Default Argument Value

function say($firstname , $lastname ="")
{
    echo "Hello $firstname $lastname" . PHP_EOL;
}

say("kurniawan");
say("Kurniawan", "eko");

echo "\n";

// Type Declaration

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);

echo "\n";

//Variable-Lenght Argument List

function sumAll(...$values)
{

    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}


sumAll(10, 20, 30, 40);
sumAll(...[10,20,30,40]);

$values = [1,2,3,4,5];
sumAll(...$values);