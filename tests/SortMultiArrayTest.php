<?php

require "./src/sortMultiArray.php";
use PHPUnit\Framework\TestCase;

class SortMultiArrayTest extends PHPUnit\Framework\TestCase
{
    public function myAssociativeArrayDataProvider()
    {
        return [
            [[
                [
                    'name' => 'Learning php, mysql & JavaScript',
                    'author' => 'Robin Nixon',
                    'price' => 30,
                    'tags' => ['php', 'javascript', 'mysql', 'python']
                ],
                [
                    'name' => 'Php for the Web: Visual QuickStart Guide',
                    'author' => 'Larry Ullman',
                    'price' => 25,
                    'tags' => ['php']
                ],
                [
                    'name' => 'pHp and MySqL for Dynamic Web Sites',
                    'author' => 'Larry Ullman',
                    'price' => 14.39,
                    'tags' => ['php', 'mysql']
                ],
                [
                    'name' => 'Modern PhP: New Features and Good Practices',
                    'author' => 'Josh Lockhart',
                    'price' => 24,
                    'tags' => ['php']
                ],
                [
                    'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
                    'author' => 'Jon Duckett',
                    'price' => 20,
                    'tags' => ['javascript', 'jquery']
                ],
                [
                    'name' => 'Miss Peregrine\'s Home for Peculiar Children',
                    'author' => 'Ransom Riggs',
                    'price' => 8.18
                ]
            ], [8.18, 14.39, 20, 24, 25, 30]
            ]
        ];
    }

    /**
     * @dataProvider myAssociativeArrayDataProvider
     */

    public function testPositive($myAssociativeArray, $expectedNumbers)
    {
        $expectedFirstNumber = 8.18;
        $expectedLastNumber = 30;
        $result = sortMultiArray($myAssociativeArray);
        for ($i = 0; $i < count($result); $i++){
            $this -> assertEquals($expectedNumbers[$i], $result[$i]['price']);

        }


    }

}