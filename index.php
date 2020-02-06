<?php
$dir = 'images';

if (is_dir($dir)) {
    echo 'yes<br>';
    $openDir = opendir($dir);
    var_dump($openDir);
    $file = readdir($openDir);
    var_dump($file);
    $file = readdir($openDir);
    var_dump($file);
    $file = readdir($openDir);
    var_dump($file);
    $file = readdir($openDir);
    var_dump($file);


    closedir($openDir);
}