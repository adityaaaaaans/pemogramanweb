<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}   echo "Connection Successfully to Project 1 <br>";

$connection_2 = mysqli_select_db($connection, "project2");
if(!$connection_2) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project2";

mysqli_close($connection);

?>