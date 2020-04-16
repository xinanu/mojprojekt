<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    echo "The price of " . $name . " ";
    echo "is " . $price;
    $query = "INSERT INTO products(name, price)";

    $query .= "VALUES ('$name', '$price')";
    $result = mysqli_query($query);
    if (!$result) {
        die('Query failed: ' . mysqli_error());
    }
}
?>
<br>
<a href=form.php>Return</a>