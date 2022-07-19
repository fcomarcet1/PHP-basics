<?php
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