<?php

$newArray = [];

for ($x = 0; $x <= 9; $x++) {
    $newNumber1 = rand(1, 6);
    $newNumber2 = rand(1, 6);
    $newNumber3 = rand(1, 6);
    $newNumber = [$x, $newNumber1 + $newNumber2 + $newNumber3];
    array_push($newArray, $newNumber);
}

echo json_encode($newArray, JSON_PRETTY_PRINT);