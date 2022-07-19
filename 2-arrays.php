<?php
### ARRAYS ###
$array = [1, 2, 3, 4, 5];
$array[0]; // returns 1
$array[1]; // returns 2

$array2 = ['a' => 'hello', 'b' => 'test', 'c' => 3];
$array2['a']; // returns 'hello'
$array2['b']; // returns 'test'
$array2['c']; // returns 3

$list = [1, [2, 'test']];
$list[0]; //echo (string)$list[0] -> returns 1
$list[1][0]; // returns 2
$list[1][1]; // returns 'test'

// count elements in array
count($array); // returns 5
//echo sizeof($list); //  sizeof is alias from count consider use count -> returns 2

// Add element to array
$list[] = 'last item'; // add element to the end of the array
//var_dump($list); // returns array(2) { [0] => string(1) "1" [1] => array(2) { [0] => string(1) "2" [1] => string(4) "test" } [2] => string(8) "last item" }

// Add element to array at specific index
$list[3] = 'third item'; // add element to the end of the array

// Add element at the beginning of the array
array_unshift($list, 'first item'); // returns array(4) { [0] => string(8) "first item" [1] => string(1) "1" [2] => array(2) { [0] => string(1) "2" [1] => string(4) "test" } [3] => string(8) "last item" }

// Add element at the end of the array
array_push($list, 'last item'); // returns array(5) { [0] => string(8) "first item" [1] => string(1) "1" [2] => array(2) { [0] => string(1) "2" [1] => string(4) "test" } [3] => string(8) "last item" [4] => string(8) "last item" }
$list[] = 'last item'; // $list[] is x2 faster than array_push

// Check if array contains element
in_array(1, $list); // returns true

//Check if array contains element at specific index
$list2 = ['a', 'b', 'c', 'd', 'e'];
array_search(1, $list); // returns 1
array_search('a', $list2); // returns 0
array_search('b', $list2); // returns 1

// Remove last element from array
$stack = ["naranja", "plátano", "manzana", "frambuesa"];
$fruit = array_pop($stack); // return ["naranja", "plátano", "manzana"]

// Remove first element from array
$removed = array_shift($stack); // return ["plátano", "manzana", "frambuesa"]