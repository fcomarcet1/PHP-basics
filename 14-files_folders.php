<?php
// check if file exists
if (file_exists("test.txt")) {
    echo "The file exists";
} else {
    echo "The file does not exist";
}

//get file size
$file = "test.txt";
$filesize = filesize($file);

// open file in read mode
$file = fopen("test.txt", 'rb');

// close file
fclose($file);

// read content of a file into a variable
$data = fread($file, $filesize);

//or
while (!feof($file)) {
    $data .= fgets($file, $filesize);
}

// read file line by line
$file = fopen("test.txt", 'rb');
while (!feof($file)) {
    $line = fgets($file);
    echo $line;
}

// write content of a file
$file = fopen("test.txt", 'wb');
fwrite($file, $data);
fclose($file);

// delete file
unlink("test.txt");

