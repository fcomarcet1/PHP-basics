<?php
echo "Hello, World Test!\n </br>";
//printf("%s\n", "Hello, World!");
//sprintf('%s', 'Hello, World!');
echo "</br>";
echo "<hr size='2px' color='black' />";


### VARIABLES && VARIABLES TYPES###
$name = 'Francisco'; //string
$age = 25; //integer
$salary = 1000.00; //float
$is_employed = true; //boolean
$telephone = null; //null
$address = ['street' => 'Rua dos Bobos', 'number' => '123']; //array
$address2 = (object)['street' => 'Rua dos Bobos', 'number' => '123']; //object

var_dump($address2);
print_r($address2); //stdClass Object ( [street] => Rua dos Bobos [number] => 123 )
echo "</br>";
echo "<hr size='2px' color='black' />";


### PRINT VALUES ###
echo "My name is $name and I'm $age years old.(without {})\n";
echo "</br>";
echo "My name is {$name} and I'm {$age} years old.(with {})\n";
echo "</br>";
echo sprintf('My name is %s and I\'m %d years old.(with sprintf)', $name, $age);
echo "</br>";
echo "<hr size='2px' color='black' />";


### OPERATORS ###
$x = 1;
$y = 2;
$z = $x + $y;
$t = $x - $y;
$u = $x * $y;
$v = $x / $y;
$w = $x % $y;
$x = $x ** $y;
$y = $x++;
$x = $x + 1;
$z = $x--;
$y = $x - 1;


### STRINGS ###
$name = 'Francisco';
$name2 = "Francisco";
$name3 = "Francisco's";
$name4 = "Francisco's\n"; // new line
$name5 = "Francisco's\t"; // tab
$name6 = "Francisco's\r"; // carriage return
$name7 = "Francisco's\n\t"; // new line and tab
$name8 = "Francisco's\r\n"; // carriage return and new line

// String functions
substr($name, 0, 3); // returns 'Fra'
strlen($name); // returns 7
strpos($name, 's'); // returns 5
str_replace('s', 'x', $name); // returns 'Franxico'
strtolower($name); // returns 'francisco'
strtoupper($name); // returns 'FRANCISCO'
str_repeat($name, 2); // returns 'FranciscoFrancisco'
ucfirst($name); // returns 'Francisco'
trim($name); // returns 'Francisco'
explode(' ', $name); // split a string into array -> returns ['Francisco']
implode(' ', ['Francisco']); // join array elements in a string ->returns 'Francisco'

// numbers functions
$number = 55;
$number2 = 55.55;
//echo round($number2); // returns 56
intval($number); // returns 55
floatval($number); // returns 55.0
is_int($number); // returns true
is_float($number); // returns false
is_numeric($number); // returns true