<?php

function sortMultiArray($books)
{
    $sortBooks = [];
    foreach ($books as &$value) {
        $sortBooks[] = &$value['price'];
    }
    array_multisort($sortBooks, $books);
    return $books;
}