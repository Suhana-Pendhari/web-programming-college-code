<?php
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$discount = $_POST['discount'];

$final_price = $price - ($price * $discount / 100);

mysqli_query($conn, "UPDATE Product SET 
Product_Name='$name',
Price='$price',
Quantity='$qty',
Discount='$discount',
Final_Price='$final_price'
WHERE Product_ID=$id");

echo "Updated Successfully <br>";
?>
