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
</head>
<body>

<form action="Fel2.php" method="GET">
    <input type="number" name="szam1" step="any" placeholder="Első szám">
    <input type="number" name="szam2" step="any" placeholder="Második szám">
    <select name="muveletek">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Számol" name="szamol">
</form>

<p>
    <br>
    Az eredmény:
</p>

<?php
if (isset($_GET["szamol"])) {
    if (is_numeric($_GET["szam1"]) && is_numeric($_GET["szam2"])) {
        $szam1 = $_GET["szam1"];
        $szam2 = $_GET["szam2"];
        $muvelet = $_GET["muveletek"];

        switch ($muvelet) {
            case "+":
                echo round($szam1 + $szam2, 2);
                break;
            case "-":
                echo round($szam1 - $szam2, 2);
                break;
            case "*":
                echo round($szam1 * $szam2, 2);
                break;
            case "/":
                if ($szam2 == 0) {
                    echo "Nullával való osztás értelmetlen művelet!";
                } else {
                    echo round($szam1 / $szam2, 2);
                }
                break;
        }
    } else {
        echo "Adja meg a számokat!";
    }
}
?>
</body>
</html>
