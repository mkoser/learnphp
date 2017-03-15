<?php
    // generate a random number between 1 and 3, inclusive
    $randomNumber - rand(1, 3);

    // initialize verb string
    $verb = '';

    // pick different verb string depending on random number
    if ($randomNumber == 1) {
        $verb  = 'dynamic';
    }
    else if ($randomNumber == 2) {
        $verb = 'simple';
    }
    else if ($randomNumber == 3) {
        $verb = 'short';
    }
?>
