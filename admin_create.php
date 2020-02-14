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

if (isset($_POST['title']) AND $_POST['title'] != '') {

    $title = $_POST['title'];
    $descrMin = $_POST['descr_min'];
    $description = $_POST['description'];

    move_uploaded_file($_FILES['image']['tmp_name'], 'image/'.$_FILES['image']['name']);

    $conn = connect();

    $sql = "INSERT INTO info (title, descr_min, description, image)
VALUES ('".$title."', '".$descrMin."', '".$description."', '".$_FILES['image']['name']."')";

    if (mysqli_query($conn, $sql)) {
        setcookie('bd_create_success', 1, time()+10);
        header('Location: /course-php.de/admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    close($conn);
}
?>

<h2>Create post</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <p>Title: <input type="text" name="title"></p>
    <p>Min description:</p>
    <textarea name="descr_min"></textarea>
    <p>Description:</p>
    <textarea name="description"></textarea>

    <p>Photo: <input type="File" name="image"></p>

    <p><input type="submit" value="add"></p>
</form>





