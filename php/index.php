<?php

function setName(string $name, callable $nameValidatorFunction): void
{
    if (!$nameValidatorFunction($name)) {
        echo "Your name is invalid!";
        return;
    }

    echo "Your name is now: " . $name;
}

$name = "Marcin";
// $validatorFn = function (string $name): bool {
//     return !($name === "Marcin");
// };

$validatorFn = fn (string $name): bool => !($name === "Marcin");

setName($name, $validatorFn);
