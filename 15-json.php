<?php
$testJson = ['a', 'b', 'c'];

// encode to json
try {
    $encoded = json_encode($testJson, JSON_THROW_ON_ERROR);
}catch (Exception $e) {
    echo $e->getMessage();
}

// decode from json
try {
    $decoded = json_decode($encoded, true, 512, JSON_THROW_ON_ERROR);
}catch (Exception $e) {
    echo $e->getMessage();
}
