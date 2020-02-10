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

// Create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
mysqli_set_charset($conn, "utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$b = 36;
$sql = "SELECT name, cost FROM goods WHERE cost >" . $b;
$result = mysqli_query($conn, $sql);

var_dump(mysqli_num_rows($result));

$a = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $a[] = $row;
    }
} else {
    echo "0 results";
}
echo '<pre>';
print_r($a);
echo '</pre>';
mysqli_close($conn);