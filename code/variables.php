<?php

$boolean = true;
$falseBoolean = false;

$integer = 123;
$float = 123.456;

$string = 'Example string';

$addingVariables = $integer + $float; // 246.45600000000002
$concatString = $string . $integer; // Example string

$addingStringToInteger = $string + $integer; 
// PHP Fatal error:  Uncaught TypeError: Unsupported operand types: string + int
