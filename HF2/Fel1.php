<?php
$tomb = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');

foreach ($tomb as $ertek) {
    if (is_numeric($ertek)) {
        echo $ertek . " típusa: " . gettype($ertek)
            . "<br>numerikus: " . "Igen" . "<br><br>";
    } else {
        echo $ertek . " típusa: " . gettype($ertek)
            . "<br>numerikus: " . "Nem" . "<br><br>";
    }
}
