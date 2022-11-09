<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysql_connect_error());
}   echo "Connection Successfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru VALUES(' ','Firdaus', 'Cemani Grogol sukoharjo', '2005-05-17', 'K3519070', 'RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection);

?>