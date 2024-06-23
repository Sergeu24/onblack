<?php
$servername = "localhost";
$username = "k92972ks_onblack";
$password = "33*ONBLACk";
$dbname = "k92972ks_onblack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    die("Не удалось устоновить соединение". $conn -> connect_error);

}

?>