<?php

function maxNumbers($temperatures)
{
    $maxArray = [];
    for ($i = 0; $i < 3; $i++) {
        $maxNumber = max($temperatures);
        array_push($maxArray, $maxNumber);
        $key = array_search($maxNumber, $temperatures);
        unset($temperatures[$key]);

    }
    $maxNumber = implode(" ", $maxArray);
    return $maxNumber;
}