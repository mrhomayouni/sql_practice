<?php
$mysqli = new mysqli("localhost", "root", "", "practice");
if (mysqli_connect_errno()) {
    echo "not connected";
} else {
    echo "connected";
}
//Set the Persian language:
mysqli_set_charset($mysqli,"utf8");
//Connection information:
//var_dump($mysqli);
?>

