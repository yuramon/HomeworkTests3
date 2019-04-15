<?php

require "./src/averageNumbers.php";
use PHPUnit\Framework\TestCase;

class AverageNumbersTest extends PHPUnit\Framework\TestCase
{
    public function myArrayDataProvider()
    {
        return [
            [[33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28], "23 23 27"],
            [[100, 10, 301, 0, 300], "10 100 300"],
            [[100, 100, 100, 100, 100, 99, 99], "100 100 100"]
        ];
    }

    /**
     * @dataProvider myArrayDataProvider
     */

    public function testPositive($myArray, $myResult)
    {
        $result = averageNumbers($myArray);
        $this -> assertEquals($myResult, $result);
    }

}