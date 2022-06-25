<?php

/* For each bisa digunakan untuk mengakses seluruh
data di array secara otomatis */

// tanpa for each

$names = ["eko", "kurniawan", "khannedy"];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i]" . PHP_EOL;
}

echo "\n";

// For Each

$names = ["Eko", "Kurniawan", "Khannedy"];

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

echo "\n";

// For Each dengan Key

$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}