<?php
require_once 'dbconnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products
            WHERE id = " . $id;

    if (isset($conn)) {
        if ($conn->query($sql)) {
            header("Location: listing.php");
        } else {
            echo "Hiba!";
        }
    }
}

$conn->close();
