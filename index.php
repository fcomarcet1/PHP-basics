<?php
echo "Hello, World!\n </br>";
//printf("%s\n", "Hello, World!");
//sprintf('%s', 'Hello, World!');

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

// numbers fuctions
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
echo sizeof($list); //  sizeof is alias from count consider use count -> returns 2

// Add element to array
$list[] = 'last item'; // add element to the end of the array
//var_dump($list); // returns array(2) { [0] => string(1) "1" [1] => array(2) { [0] => string(1) "2" [1] => string(4) "test" } [2] => string(8) "last item" }

// Add element to array at specific index
$list[3] = 'third item'; // add element to the end of the array

// Add element at the beginning of the array
array_unshift($list, 'first item'); // returns array(4) { [0] => string(8) "first item" [1] => string(1) "1" [2] => array(2) { [0] => string(1) "2" [1] => string(4) "test" } [3] => string(8) "last item" }

// Add element at the end of the array
// $list[] is x2 faster than array_push
array_push($list, 'last item'); // returns array(5) { [0] => string(8) "first item" [1] => string(1) "1" [2] => array(2) { [0] => string(1) "2" [1] => string(4) "test" } [3] => string(8) "last item" [4] => string(8) "last item" }

/*$number2 = 15;
$num = 5;
$place = 'árbol';
$format = 'Hay %d monos en el %s';
echo sprintf($format, $num, $place);
echo "<br>";
echo "Print variables" . " " . $name . " " ."in screen";
echo "<br>";
// return json
$data = ['response' => 'Test request'];
try {
    echo json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

echo "</br>";

// Variables
$variableName = 'foo';
$foo = 'bar';
echo $foo;
echo $$variableName;
echo ${$variableName};

// Data types
$typeVarNull = null;
$typeVarBoolean = true | false;
$typeVarInteger = 25;
$typeVarInteger2 = -3;
$typeVarFloat = 26.4;
$typeVarArray = ["A", true, 123 => 5];

echo $typeVarArray[0]; // Returns "A"
echo $typeVarArray[1]; // Returns true
echo $typeVarArray[123]; // Returns 5
echo $typeVarArray[1234]; // Returns null

$typeVarString = 'bar';
$typeVarString[0]; //b

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