<?php

/* Variable Function -> Kemampuan memanggil sebuah function dari
value yang terdapat di sebauh variable */

/* Untuk menggunakan bisa dengan $namaVariable(), jika ingin menambahkan
argument, bisa menggunakan $namaVariable(argument) */

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

// Penggunaan Variable Function

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");