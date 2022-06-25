<?php

$values = array(1,2,3,4);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

var_dump($names[0]);

//


$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Eko";
var_dump($names);
var_dump(count($names));

// Membuat Map

$christo = array(
    "id" => "christo",
    "name" => "Christopher Hermawan",
    "age" => 20
);

var_dump($christo);

var_dump($christo["name"]);

echo "\n";

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35
];
var_dump($budi);

var_dump($budi["age"]);

echo "\n";

// Array di dalam array

$christo = array(
    "id" => "christo",
    "name" => "Christopher Hermawan",
    "age" => 20,
    "address" => [
        "city" => "Bandung",
        "country" => "Indonesia"
    ]
    );

var_dump($christo["name"]);
var_dump($christo["address"]["country"]);