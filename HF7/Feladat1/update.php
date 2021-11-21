<?php
require_once 'dbconnection.php';

if (isset($conn)) {
    if (isset($_POST['submit'])) {
        $title = $conn->real_escape_string($_POST['title']);
        $price = $_POST['price'];
        $category = $conn->real_escape_string($_POST['category']);
        $image = $conn->real_escape_string($_POST['image']);
        $id = $_POST['id'];

        $sql = "UPDATE products SET title = '$title', price = '$price',
                category = '$category', image = '$image'
                WHERE id = '$id'";

        $result = $conn->query($sql);

        if ($result === true) {
            header("Location: listing.php");
        } else {
            echo "Hiba!";
        }
    } else {
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id =" . $id;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $conn->close();
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    title:<input type="Text" name="title" value="<?php echo $row["title"]; ?>"><br>
    price:<input type="Text" name="price" value="<?php echo $row["price"]; ?>"><br>
    category:<input type="Text" name="category" value="<?php echo $row["category"]; ?>"><br>
    image: <input type="Text" name="image" value="<?php echo $row["image"]; ?>"><br>
    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
    <input type="Submit" name="submit" value="Elkuld">
</form>
