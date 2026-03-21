<?php
$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM Ticket WHERE Ticket_ID=$id");

echo "Ticket Deleted Successfully <br>";
?>
