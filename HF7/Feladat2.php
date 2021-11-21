<?php
if (isset($_GET['id'])) {

    $response_json = dataRequest('https://fakestoreapi.com/carts/user/' . $_GET['id']);
    $response = json_decode($response_json, true);

    $response_json = dataRequest('https://fakestoreapi.com/products/');
    $response1 = json_decode($response_json, true);

    $sum = 0;

    echo "A/Az " . $_GET['id'] . "-es/as usernek " . count($response) . " db kosara van." . "<br><br>";
    foreach ($response as $carts) {
        echo "Az " . $carts['id'] . "-es/as kosár tartalma: " . "<br>";
        foreach ($carts['products'] as $products) {
            echo "Product id: " . $products['productId'] . "| Mennyiség: " . " " . $products['quantity'];
            foreach ($response1 as $allProducts) {
                if ($products['productId'] === $allProducts['id']) {
                    echo "| Ár: " . $allProducts['price'] . "<br>";
                    $sum += $allProducts['price'] * $products['quantity'];
                }
            }
        }
        echo "<br>";
    }

    echo "Az " . $_GET['id'] . "-es/as user kosarainak az összértéke: " . $sum . "<br><br>";

}

function dataRequest(string $url): string
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
    curl_close($ch);
    return $response_json;
}

?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Kérek egy idt: <input type="number" name="id">
    <input type="submit" name="submit" value="Küld">
</form>
