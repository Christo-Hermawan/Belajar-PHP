<?php

// Mengecek apakah sebuah data ada atau tidak dan isinya null atau bukan
// Biasanya menggunakan pengecekan if statement dengan fucntion isset($variable)
// Pada PHP ada null coalescing operator menggunakan tanda ??


// Tanpa Null Coalescing Operator

$data = [];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action . PHP_EOL;

// Dengan Null Coalescing Operator

$data = [];
$action = $data['action'] ?? 'nothing';

echo $action . PHP_EOL;