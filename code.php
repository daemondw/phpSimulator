<?php
require_once 'functions.php';
//var_dump($_GET);
// if (isset($_GET['n1']) AND trim($_GET['n1']) !=''){
//     $n1 = trim($_GET['n1']);
// }
// else {
//     exit('Problem!!!');
// }
// if (isset($_GET['n2']) AND trim($_GET['n2']) !=''){
//     $n2 = trim($_GET['n2']);
// }
// else {
//     exit('Problem!!!');
// }
$n1 = checkVar($_GET['n1']);
$n2 = checkVar($_GET['n2']);

for ($i= $n1; $i <= $n2; $i++) {
    echo $i." ";
}
echo 'finish';