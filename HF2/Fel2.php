<?php
$orszagok = array("Magyarország " => "Budapest", "Románia" => "Bukarest",
    "Belgium" => "Brussels", "Austria" => "Vienna", "Poland" => "Warsaw");

foreach ($orszagok as $orszag => $fovaros) {
    echo $orszag . " fővárosa " . $fovaros . "<br>";
}