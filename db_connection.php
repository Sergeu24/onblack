<?php
$servername = "localhost";
$username = "k92972ks_onblack	";
$password = "33*ONBLACk";
$dbname = "k92972ks_onblack";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>