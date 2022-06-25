<?php

$name = "Christo";
$age = 20;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";

// variable variables | Membingungkan kalau banyak

$name = "Christo";
$$name = "mantep";

echo "name : " ;
echo $name;
echo "\n";

echo "Christo : " ;
echo $Christo;
echo "\n";