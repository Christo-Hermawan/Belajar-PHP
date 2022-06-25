<?php

// Lokasi Function flexible 

function sayHello()
{
    
    echo "Hello Function" . PHP_EOL;

}

sayHello();
sayHello();

echo "\n";

// Lokasi Function
// function tidak akan jalan kalau tidak dieksekusi dalam if


$buat = true;

if ($buat) {
    function hi()
    {
        echo "Hi" . PHP_EOL;
    }
}

hi();