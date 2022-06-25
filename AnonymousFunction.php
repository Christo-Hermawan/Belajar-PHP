<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");
$sayHello("Budi");

// Anoymous Function sebagai Argument

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function (string $name): string{
    return strtoupper($name);
});

$filterFuntion = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Eko", $filterFuntion);

// Mengakses Variable di Luar Closure
/* secara default, anonymous function tidak bisa mengakses variable
yang terdapat diluar function */
/* jika ingin menggunakan variable diluar anonymous function, perlu secara
explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable
yang ingin digunakan */

$firstname = "Christo";
$lastname = "Aja";

$sayHelloChristo = function () use ($firstname, $lastname) {
    echo "Hello $firstname $lastname" . PHP_EOL;
};

$sayHelloChristo();