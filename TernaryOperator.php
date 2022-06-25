<?php

// Bukan ternary Operator

$gender = "Pria";

$hi = null;
if ($gender == "Pria") {
    $hi = "Hi bro";
} else {
    $hi = "Hi nona";
}

echo $hi . PHP_EOL;

// Ternary Operator

$gender = "Wanita";
$hi = $gender == "Pria"  ? "Hi bro" : "Hi nona";

echo $hi . PHP_EOL;