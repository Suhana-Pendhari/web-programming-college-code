<?php
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$discount = $_POST['discount'];

$final_price = $price - ($price * $discount / 100);

mysqli_query($conn, "INSERT INTO Product(Product_Name, Price, Quantity, Discount, Final_Price)
VALUES('$name','$price','$qty','$discount','$final_price')");

echo "Inserted Successfully <br>";
?>
