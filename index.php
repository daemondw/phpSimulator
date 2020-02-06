<?php
// read file

$file = 'file.txt';

if (file_exists($file)) {
    $handle = fopen($file, "r");
    var_dump($handle);

    fclose($handle);
}