<?php

// Function Return Value (1)

function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(20,20);
var_dump($result);

// Function Return Value (2)

function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70 ){
        return "B";
    }elseif ($value >= 60 ){
        return "C";
    }elseif ($value >= 50 ){
        return "D";
    }else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);

// Return Type Declarations
// Pada return value bisa mendeklarasikan tipe datanya
// Mempermudah ketika membaca tipe data kembalian function
/*Mendeklarasikan tipe data kembalian function,
selah kurung() kita bisa tambahkan: diikuti tipe data kembaliannya */

