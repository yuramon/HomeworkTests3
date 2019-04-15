<?php

require "./src/maxNumbers.php";
use PHPUnit\Framework\TestCase;

class MaxNumbersTest extends PHPUnit\Framework\TestCase
{
    public function myArrayDataProvider()
    {
        return [
            [[33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28], "40 39 34"],
            [[100, 10, 301, 0, 300], "301 300 100"],
            [[100, 100, 100, 100, 100, 99, 99], "100 100 100"]
        ];
    }

    /**
     * @dataProvider myArrayDataProvider
     */

    public function testPosistive($myArray, $myResult)
    {
        $result = maxNumbers($myArray);
        $this -> assertEquals($myResult, $result);
    }

}