<?php
require_once 'dbconnection.php';

if (isset($_POST['submit'])) {
    if (isset($conn)) {
        $title = $conn->real_escape_string($_POST['title']);
        $price = $_POST['price'];
        $category = $conn->real_escape_string($_POST['category']);
        $image = $conn->real_escape_string($_POST['image']);

        $sql = "INSERT INTO products (title, price, category, image)
            VALUES ('$title', '$price','$category', '$image')";

        if ($conn->query($sql)) {
            echo "A beszúrás sikerült!" . "<br>";
            echo "<a href='listing.php'>Listázás</a>";
            $conn->close();
        } else {
            die("Sikertelen beszúrás: " . $conn->error);
        }

    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    title: <input type="Text" name="title"><br>
    price: <input type="Text" name="price"><br>
    category: <input type="Text" name="category"><br>
    image: <input type="Text" name="image"><br>
    <input type="Submit" name="submit" value="Elkuld">
</form>