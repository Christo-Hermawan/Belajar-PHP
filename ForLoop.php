<?php

// Syntax 

// for(init statement; kondisi; post statement) {}

/* ini infinite loop karena kondisinya kosong / selalu true
for (; ; ) {
    echo "Hello For Loop" . PHP_EOL;
}
*/

// ini kondisi masuk
$counter = 1;

for (; $counter <= 10; ) {
    echo "Ini adalah for loop ke " . $counter . PHP_EOL;
    $counter++;
}
// ini init statement; kondisi masuk
/*for ($counter = 1; $counter <= 10; ) {
    echo "Ini adalah for loop ke " . $counter . PHP_EOL;
    $counter++;
}*/

// ini init statement; kondisi; post statement masuk
/*for ($counter = 1; $counter <= 10; $counter++; ) {
    echo "Ini adalah for loop ke " . $counter . PHP_EOL;
    $counter++;
}*/