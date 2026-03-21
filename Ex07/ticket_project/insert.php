<?php
$name = $_POST['name'];
$train = $_POST['train'];
$source = $_POST['source'];
$dest = $_POST['dest'];
$date = $_POST['date'];
$seat = $_POST['seat'];

mysqli_query($conn, "INSERT INTO Ticket(Passenger_Name, Train_Name, Source, Destination, Travel_Date, Seat_Type)
VALUES('$name','$train','$source','$dest','$date','$seat')");

echo "Ticket Inserted Successfully <br>";
?>
