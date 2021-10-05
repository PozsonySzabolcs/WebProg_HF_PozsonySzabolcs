<?php
$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

foreach ($napok as $nyelvek => $napokNev) {
    $vesszoDb = 1;
    echo "<b>$nyelvek: </b>";
    foreach ($napokNev as $nap) {
        if ($vesszoDb < 7) {
            echo "<b>$nap, </b>";
            $vesszoDb++;
        } else {
            echo "<b>$nap </b>";
        }
    }
    echo "<br>";
}