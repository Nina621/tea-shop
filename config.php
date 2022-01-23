<?php 

$server = "localhost";
$user = "student77210193";
$pass = "student77210193";
$database = "student77210193";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>