<?php
session_start();

if (isset($_POST['elkuldott'])) {
    if (isset($_SESSION['gszam'])) {
        jatek($_POST['talalgatas'], $_SESSION['gszam']);
    } else {
        $_SESSION['gszam'] = rand(1, 10);
        jatek($_POST['talalgatas'], $_SESSION['gszam']);
    }
}

function jatek($sszam, $gszam)
{
    if ($_POST['talalgatas'] >= 1 && $_POST['talalgatas'] <= 10) {
        logika($sszam, $gszam);
    } else {
        echo "1 és 10 közötti számot kérek!";
    }
}

function logika($sszam, $gszam)
{
    if ($sszam > $gszam) {
        echo "A szám kisebb!";
    } elseif ($sszam < $gszam) {
        echo "A szám nagyobb!";
    } else {
        echo "Eltaláltad!";
        unset($_SESSION['gszam']);
    }
}

?>

<form method="POST" action="">
    <input type="hidden" name="elkuldott" value="true">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>
