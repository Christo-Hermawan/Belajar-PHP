<?php

// single quote 

echo 'Nama : ';
echo 'Barry Allen ';

// double quote bisa pakai \n untuk enter & \t untuk tab
echo "\n";
echo "Nama : ";
echo "Barry Allen ";

echo "\n";
echo "Nama : ";
echo "Barry\t Allen\n";
echo "\n";

// Heredoc - mirip double quote

echo <<<Barry
Selamat belajar PHP
Sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

Barry;
echo "\n";
// Nowdoc - mirip single quote | gabisa parsing

echo <<<'Barry'
Selamat belajar PHP
Sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan Nowdoc
Barry;