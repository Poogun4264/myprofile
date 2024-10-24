<?php
// settings
$servernaame = "localhost";
$username = "root";
$password = "";
$dbname = "myprofils_db";

$conn = new mysqli($servernaame, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
