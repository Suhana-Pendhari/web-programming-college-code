<?php
$id = $_POST['id'];
$name = $_POST['name'];
$train = $_POST['train'];
$source = $_POST['source'];
$dest = $_POST['dest'];
$date = $_POST['date'];
$seat = $_POST['seat'];

mysqli_query($conn, "UPDATE Ticket SET 
Passenger_Name='$name',
Train_Name='$train',
Source='$source',
Destination='$dest',
Travel_Date='$date',
Seat_Type='$seat'
WHERE Ticket_ID=$id");

echo "Ticket Updated Successfully <br>";
?>
