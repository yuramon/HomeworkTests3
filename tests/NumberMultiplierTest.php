<?php

require "./src/numberMultiplier.php";
use PHPUnit\Framework\TestCase;

class NumberMultiplierTest extends PHPUnit\Framework\TestCase
{
    public function myArrayDataProvider()
    {
        return [
            [[1, 3, 2, 4], 10],
            [[2, 5, 1, 10, 3], 21],
            [[1, 1, 1, 1, 1, ], 5],
            [[0, 0, 0, 1], 1]
        ];
    }

    /**
     * @dataProvider myArrayDataProvider
     */
    public function testPositive($myArray, $countOfElements)
    {
        $result = numberMultiplier($myArray);
        $this -> assertCount($countOfElements, $result);
    }


}