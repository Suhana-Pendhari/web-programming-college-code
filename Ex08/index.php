<?php
session_start();

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if(isset($_POST['item'])) {
    $item = $_POST['item'];
    $_SESSION['cart'][] = $item;
}
?>

<html>
<body>

<h2>Add Item to Cart</h2>

<form method="post">
    <input type="text" name="item" placeholder="Enter item">
    <input type="submit" value="Add">
</form>

<a href="cart.php">View Cart</a>

</body>
</html>
