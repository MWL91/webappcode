<?php

$i = 0;

while ($i <= 10) {
    echo "Number in iteration: " . $i++ . "<br />";
}

echo '<hr />';

for ($i = 0; $i <= 10; $i++) {
    echo "Number in iteration: " . $i++ . "<br />";
}

echo '<hr />';

$i = 0;
while (true) {
    $i++;

    if ($i % 2 == 0) {
        continue;
    }

    echo $i . ' now<br />';

    if ($i > 5) break;
}

// $i = 0;
// repeat it until end of world
// $i++ => $i = 1;
// $i%2 == 0 => 1%2 == 0 => false
// echo
// $i>5 => 1>5 === false => ...

// repeat it until end of world
// $i++ => $i = 2;
// $i%2 == 0 => 2%2 == 0 => true
// continue; ... -> run next loop

// repeat it until end of world
// $i++ => $i = 3;
// $i%2 == 0 => 3%2 == 0 => false
// echo
// $i>5 => 3>5 === false => ...
