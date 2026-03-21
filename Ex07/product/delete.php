<?php
$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM Product WHERE Product_ID=$id");

echo "Deleted Successfully <br>";
?>
