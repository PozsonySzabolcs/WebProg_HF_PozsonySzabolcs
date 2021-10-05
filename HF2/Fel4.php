<?php
$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
echo "Az eredeti tömb: ";
foreach ($szinek as $szin) {
    echo $szin, " ";
}
echo "<br>";

function atalakit(array $tomb, string $betumeret): array
{
    switch ($betumeret) {
        case "kisbetus":
            foreach ($tomb as &$ertek) {
                $ertek = strtolower($ertek);
            }
            break;
        case  "nagybetus":
            foreach ($tomb as &$ertek) {
                $ertek = strtoupper($ertek);
            }
            break;
        default:
            echo "A megadott paraméter nem megfelelő!<br>";
    }

    return $tomb;
}

//teszt1 kisbetűssé alakítja a tömb elemeit.
$szinek = atalakit($szinek, "kisbetus");
echo "Az átalakított tömb: ";
foreach ($szinek as $szin) {
    echo $szin, " ";
}
echo "<br>";

/*//teszt2 nagybetűssé alakítja a tömb elemeit.
$szinek = atalakit($szinek, "nagybetus");
echo "Az átalakított tömb: ";
foreach ($szinek as $szin) {
    echo $szin, " ";
}
echo "<br>";*/

/*//teszt3 nem alakítja át az elemeket.
$szinek = atalakit($szinek, "valami");
echo "Az átalakított tömb: ";
foreach ($szinek as $szin) {
    echo $szin, " ";
}
echo "<br>";*/