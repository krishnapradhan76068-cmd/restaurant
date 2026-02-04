<?php
$servername="localhost:1306";
$username="root";
$password="";
$database="stu_db";

$conn=mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("connection lost: " .mysqli_connect_error());
}
?>
