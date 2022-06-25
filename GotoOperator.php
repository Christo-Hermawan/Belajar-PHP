<?php

/* Dengan goto, kode akan diarahkan ke variable yg dituju
dan line dibawahnya / yang terlewat akan diabaikan. */

goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

// goto operator di loop
/* Bisa juga dipakai di loop dan jika ada goto, maka
looping akan berhenti dan berlanjut ke variable yg dituju goto */

$counter = 1;
while (true) {
    echo "While Loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";