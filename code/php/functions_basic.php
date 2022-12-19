<?php

function soundOfAnimal(string $animal, bool $echo): string
{
    $sound = '';

    switch ($animal) {
        case "dog":
            $sound = "wow!";
            break;
        case "cat":
            $sound = "meoaw";
            break;
        case "turtle":
            $sound = "...";
            break;
        default:
            $sound = "I don't know the sound...";
            break;
    }

    if ($echo) {
        echo $animal . ' is telling you: ' . $sound;
    }

    return $sound;
}

soundOfAnimal("dog", true);

echo '<hr />';

function setAnimalName(string &$animal): void
{
    $animal = "Fluffy";
}

$newPet = "dog";
setAnimalName($newPet);

echo $newPet;
