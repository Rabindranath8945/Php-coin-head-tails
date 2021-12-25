<?php

$heads = 0;
$tails = 0;

for ($i = 1; $i <= 100; $i++) {
    $randomNumber = rand(1, 2);
    // echo $randomNumber;

    if ($randomNumber == 1) {
        $heads++;
        // echo 'Head, You are win <br>';
    } else {
        $tails++;
        // echo 'Tail, You are lost <br>';
    }
}

echo "There are {$heads} heads and {$tails} tails. <br>";

if ($heads > $tails) {
    echo 'Head, I am win';
} elseif ($tails > $heads) {
    echo 'Tail, You are win';
} else {
    echo 'Its Draw';
}
