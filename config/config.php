<?php
// settings
$servernaame = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servernaame, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
