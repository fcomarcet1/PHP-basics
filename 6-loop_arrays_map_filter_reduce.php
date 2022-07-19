<?php
// Array map -> return new array that contains the result of the callback function for each element in the array
$numbers = [1, 2, 3, 4, 5];
$numbersx2 = array_map(function($number) {
    return $number * 2;
}, $numbers);

$doubles = array_map(fn($value) => $value * 2, $numbers); //returns [2, 4, 6, 8, 10]

// Array filter -> generate new array with only the elements that satisfy the callback function returns true
$numbers = [1, 2, 3, 4];
array_filter($numbers, static fn($value) => $value % 2 === 0); // returns [2, 4]

// Array reduce -> reduce the array to a single value
$numbers = [1, 2, 3, 4];
array_reduce($numbers, static fn($carry, $value) => $carry + $value, 0); // returns 10