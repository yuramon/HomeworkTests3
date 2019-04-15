<?php

function averageNumbers($temperatures )
{
    $averageArray = [];
    $length = count($temperatures) - 1;
    sort($temperatures);
    $averageNumber = $temperatures[($length/ 2) - 1];
    array_push($averageArray, $averageNumber);
    $averageNumber = $temperatures[($length) / 2];
    array_push($averageArray, $averageNumber);
    $averageNumber = $temperatures[($length / 2) + 1];
    array_push($averageArray, $averageNumber);
    $averageNumber = implode(" ", $averageArray);
    return $averageNumber;
}