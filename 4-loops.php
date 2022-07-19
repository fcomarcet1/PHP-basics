<?php
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