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

### CONDITIONALS ###
$x = 50;
$y = 125;

if ($x > $y) {
    echo "x is greater than y";
} elseif ($x < $y) {
    echo "x is less than y";
} else {
    echo "x is equal to y";
}

echo "</br>";
echo "<hr size='2px' color='black' />";

$value = 'test';
echo $value === "test" ? "true" : "false"; // returns "true"*/

echo "</br>";
echo "<hr size='2px' color='black' />";

### LOOPS ###
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

echo "</br>";
echo "<hr size='2px' color='black' />";
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

echo "</br>";
echo "<hr size='2px' color='black' />";

$listNames = ['Frank', 'John', 'Mary', 'Bob'];
foreach ($listNames as $name) {
    echo $name."\n";
}
echo "</br>";
echo "<hr size='2px' color='black' />";

foreach ($listNames as $key => $value) {
    echo $key.": ".$value."\n";
}

echo "</br>";
echo "<hr size='2px' color='black' />";

for ($i = 0; $i < count($listNames); $i++ ){
    echo $listNames[$i]."\n";
}

echo "</br>";
echo "<hr size='2px' color='black' />";

// more efficient way to loop through array
for ($i = 0, $iMax = count($listNames); $i < $iMax; $i++ ){
    echo $listNames[$i]."\n";
}


echo "</br>";
echo "<hr size='2px' color='black' />";
// ### return json format ###
$data = ['response' => 'Test request'];
try {
    echo json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

echo "</br>";
echo "<hr size='2px' color='black' />";

### FUNCTIONS ###
function test() {
    echo "test";
}

function sendEmail(string $email, string $message): bool {
    echo "Email sent to: $email with message: $message \n";
    return true;
}
$success = sendEmail('test@test.com', 'test message');
echo "</br>";

if (!$success) {
    echo "Error sending email";
}
echo "Email sent successfully";

echo "</br>";
echo "<hr size='2px' color='black' />";

function testEmail(string $to): bool {
    $test = 'A';
    echo "Email sent to: $to \n";
    return true;
}
//var_dump($test); // undefined variable

echo "</br>";
echo "<hr size='2px' color='black' />";

function getPostValue(string $key, $default = null) {
    if (!isset($_POST[$key])) {
        return $default;
    }
    return $_POST[$key];
}
// anonymous function
$test = function () {
    echo "test";
};

$test();

//arrow function
$printTest = fn() => "test";
//echo $printTest();


$multiply = fn($x, $y) => $x * $y;
//echo $multiply(2, 3);

echo "</br>";
echo "<hr size='2px' color='black' />";

$test = 'test';
$myFunction = function() use ($test) {
    echo $test;
};

/**
// functions
function add ($number1, $number2) {
    return $number1 + $number2;
}
echo "</br>";
echo add(25, 60);

echo "</br>";
$result = add($number1, $number2);
echo $result;

function getPostValue($key, $default = null) {
    if (!isset($_POST[$key])){
        return $default;
    }
    return $_POST[$key];

    // less cognitive load
    //return $_POST[$key] ?? $default;
}

// receives $_POST['username]
echo  getPostValue('username');

// retrieves $_POST['email'] and defaults to empty string
echo getPostValue('email', '');


//Suberglobals
/*
    * $GLOBALS - References all variables available in global scope
    * $_SERVER - Server and execution environment information
    * $_GET - HTTP GET variables
    * $_POST - HTTP POST variables
    * $_FILES - HTTP File Upload variables
    * $_COOKIE - HTTP Cookies
    * $_SESSION - Session variables
    * $_REQUEST - HTTP Request variables
    * $_ENV - Environment variables
*/
//echo "</br>";
//echo $_POST;
//var_dump($_SERVER);

//echo "</br>";
// URL = http://www.example.com/index.php?myVar=myVal
//echo $_GET["myVar"] === "myVal" ? "true" : "false"; // returns "true"*/