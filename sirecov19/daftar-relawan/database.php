<?php
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "oopscrud";
// Create connection
$conn = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>