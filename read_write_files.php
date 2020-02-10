<?php
// read file

$file = 'file.txt';

if (file_exists($file)) {
    $handle = fopen($file, "r");
    // var_dump($handle);
    $contents = fread($handle, filesize($file));
    echo $contents;
    fclose($handle);
    // write file
    $handle = fopen($file, "r+");
    fwrite($handle, 'Some speach');
    fclose($handle);
}

file_put_contents($file, 'Some info');
$second = file_get_contents($file);
echo '<hr>';
echo $second;


