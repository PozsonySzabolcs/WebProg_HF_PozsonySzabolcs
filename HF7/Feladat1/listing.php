<?php
require_once 'dbconnection.php';

$sql = "SELECT * FROM products";
if (isset($conn)) {
    $results = $conn->query($sql);

    echo "<br>" . "<a href='insert.php'>Új termék bevitele</a>" . "<br><br>";

    if ($results->num_rows > 0) {
        echo "<table border='1'>";
        while ($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            $src = $row['image'];
            echo "<td>" . "<img src= '$src' height='50px'>" . "</td>";
            echo "<td><a href = \"update.php?id=" . $row['id'] . "\">Update</a></td>";
            echo "<td><a href = \"delete.php?id=" . $row['id'] . "\">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo 'Üres a tábla!';
    }

    $conn->close();
}