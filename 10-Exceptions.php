<?php
try {
    echo 1 / 0;
}catch (Throwable $e){
    echo $e->getMessage();
}

try {
    echo 1 / 0;
}catch (DivisionByZeroError $e){
    echo 'Ooops I divided by zero';
}catch (Throwable $e){
    echo $e->getMessage();
}