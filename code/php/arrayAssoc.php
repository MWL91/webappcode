<?php

$students = [
    [
        "name" => "Marcin",
        "surname" => "Lenkowski",
        "work" => [
            "Programming",
            "Teacher"
        ]
    ],
    [
        "name" => "Ahmad",
        "surname" => "Fakhouri",
        "work" => [
            "Student"
        ]
    ],
    [
        "name" => "Ebenezer-Oluwafemi",
        "surname" => "Iluyomade",
        "work" => [
            "Student"
        ]
    ],
    [
        "name" => "Abdul-Razzaq",
        "surname" => "Giwa",
        "work" => [
            "Student"
        ]
    ],
    [
        "name" => "Kimberly",
        "surname" => "Duduzile Nengomasha",
        "work" => [
            "Student"
        ]
    ]
];

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        if ($key === "work") {
            echo $key . '=' . join(",", $value) . '<br/>';
            continue;
        }

        echo $key . ' = ' . $value . '<br/>';
    }
}
