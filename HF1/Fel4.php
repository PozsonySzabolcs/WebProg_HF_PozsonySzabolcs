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
            width: 50px;
            height: 50px;
        }

        .fekete {
            background: black;
        }
    </style>
</head>
<body>
<?php
echo "<table>";

for ($i = 1; $i <= 8; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 8; $j++) {
        if ($i % 2 != 0) {
            if ($j % 2 == 0) {
                echo "<td class='fekete'></td>";
            } else {
                echo "<td></td>";
            }
        } else {
            if ($j % 2 == 0) {
                echo "<td></td>";
            } else {
                echo "<td class='fekete'></td>";
            }
        }
    }
    echo "<tr>";
}

echo "</table>";
?>
</body>
</html>
