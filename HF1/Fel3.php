<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin: 0 auto;
        }

        td {
            border: 1px solid black;
            text-align: center;
            width: 100px;
            height: 50px;
        }
    </style>
</head>
<body>
<?php
echo "<table>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($j * $i) . " : " . $j . " = "
            . $i . "<br>" . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>
