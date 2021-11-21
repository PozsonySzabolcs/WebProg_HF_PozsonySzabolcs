<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "fakestore";

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Kapcsolodasi hiba: " . $conn->connect_error);
}