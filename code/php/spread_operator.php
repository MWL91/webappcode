<?php

function calculator(string $target, int ...$numbers): float
{
    $sum = array_sum($numbers);
    echo $target . ": " . $sum;

    return $sum;
}

var_dump(calculator("Snow balls", 2, 3, 4, 5, 6, 2, 3, 9));
