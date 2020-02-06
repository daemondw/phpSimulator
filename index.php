<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $dir = 'images';
                    if (is_dir($dir)) {
                        $openDir = opendir($dir);
                        $active = true;
                        while (($file = readdir($openDir)) !== false) {
                            if($file != "." && $file != ".."){
//                                echo $file.'<br>';
                                if ($active) {
                                    echo '<div class="carousel-item active">';
                                    $active = false;
                                } else {
                                    echo '<div class="carousel-item">';
                                }
                                echo '<img class="d-block w-100" src="'.$dir.'/'.$file'" alt="First slide"></dir>';
                            }
                        }

                        closedir($openDir);
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html

<?php
$dir = 'images';

if (is_dir($dir)) {
//    echo 'yes<br>';
    $openDir = opendir($dir);
//    var_dump($openDir);
//    $file = readdir($openDir);
//    var_dump($file);
//    $file = readdir($openDir);
//    var_dump($file);
//    $file = readdir($openDir);
//    var_dump($file);
//    $file = readdir($openDir);
//    var_dump($file);

    while (($file = readdir($openDir)) !== false) {
        if($file != "." && $file != ".."){
            echo $file.'<br>';
        }
    }

    closedir($openDir);
}
?>