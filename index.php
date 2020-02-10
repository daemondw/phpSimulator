<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
require_once 'config.php';
require_once 'function.php';

$conn = connect();
$id = 2;
$newName = 'Бананы';
$sql = "UPDATE goods SET name='".$newName."' WHERE id=".$id;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


$a = select($conn);

echo '<pre>';
print_r($a);
echo '</pre>';

$close($conn);