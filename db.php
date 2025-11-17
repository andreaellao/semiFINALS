<?php 
$host = "localhost";
$user =  "root";
$pass = "";
$db = "EXAM_ELLAO";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die ("connection field: " .  mysqli_connect_error());
}

?>