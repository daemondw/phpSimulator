<?php
require_once 'core/config.php';
require_once 'core/function.php';

//$conn = connect();
//
//// Обновление данных
//$id = 2;
//$newName = 'Бананы';
//$sql = "UPDATE goods SET name='".$newName."' WHERE id=".$id;
//
//if (mysqli_query($conn, $sql)) {
//    echo "Record updated successfully";
//} else {
//    echo "Error updating record: " . mysqli_error($conn);
//}
//
//// Вставка данных
//
//$sql = "INSERT INTO goods (name, description, cost, amount, image)
//VALUES ('cherry', 'red', 23, 445, 'cherry.png')";
//
//if (mysqli_query($conn, $sql)) {
//    echo '<br>';
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//
//$a = select($conn);
//
//echo '<pre>';
//print_r($a);
//echo '</pre>';
//
//$close($conn);
?>


<form action="add.php" method="POST">
    <p>Title: <input type="text" name="title"></p>
    <p>Min description:</p>
    <textarea name="descr_min"></textarea>
    <p>Description:</p>
    <textarea name="description"></textarea>
    <p><input type="submit" value="add"></p>
</form>