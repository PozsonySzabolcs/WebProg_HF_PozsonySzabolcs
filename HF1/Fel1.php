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
<?php
$datum = date("w");

switch ($datum) {
    case 0:
        echo "Ma vasárnap.";
        break;
    case 1:
        echo "Ma hétfő.";
        break;
    case 2:
        echo "Ma kedd.";
        break;
    case 3:
        echo "Ma szerda.";
        break;
    case 4:
        echo "Ma csütörtök.";
        break;
    case 5:
        echo "Ma péntek.";
        break;
    case 6:
        echo "Ma szombat.";
        break;
    default :
        echo "Hiba történt!";
        break;
}
?>
</body>
</html>
