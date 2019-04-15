<?php

function numberMultiplier($myArray)
{
    $newArray = [];
    $count = count($myArray);
    for ($i = 0; $i < $count; $i++) {
        $ourNumber = $myArray[$i];
        for ($j = 0; $j < $ourNumber; $j++) {
            array_push($newArray, $ourNumber);
        }
    }
    return $newArray;
}