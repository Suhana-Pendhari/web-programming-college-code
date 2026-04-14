<?php
session_start();
?>

<html>
<body>

<h2>Your Cart</h2>

<?php
if(empty($_SESSION['cart'])) {
    echo "Cart is empty";
} else {
    foreach($_SESSION['cart'] as $key => $value) {
        echo $value . " ";
        echo "<a href='remove.php?id=$key'>Remove</a><br>";
    }
}
?>

<br>
<a href="index.php">Add More Items</a><br>
<a href="clear.php">Clear Cart</a>

</body>
</html>
