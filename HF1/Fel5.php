<?php declare(strict_types=1);
?>
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

function spongCase(string $szoveg): string
{
    $db = 0;
    $tomb = str_split($szoveg);
    for ($i = 0; $i < count($tomb); $i++) {
        if (ctype_alpha($tomb[$i])) {
            if ($db % 2 == 0) {
                $tomb[$i] = strtoupper($tomb[$i]);
            }
            $db++;
        }
    }

    $szoveg = "";
    foreach ($tomb as $ertek) {
        $szoveg .= $ertek;
    }

    return $szoveg;
}

echo spongCase("Hello");
echo "<br>";
echo spongCase("How are you?");
?>
</body>
</html>
