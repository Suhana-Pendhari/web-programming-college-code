<?php include 'db.php'; ?>

<h2>Railway Ticket Booking</h2>

<form method="post">
    Ticket ID (for Update/Delete): <input type="number" name="id"><br><br>
    Passenger Name: <input type="text" name="name"><br><br>
    Train Name: <input type="text" name="train"><br><br>
    Source: <input type="text" name="source"><br><br>
    Destination: <input type="text" name="dest"><br><br>
    Travel Date: <input type="date" name="date"><br><br>
    Seat Type: <input type="text" name="seat"><br><br><br>

    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
    <input type="submit" name="display" value="Display">
</form>

<hr>

<?php
if(isset($_POST['insert']))
    include 'insert.php';

if(isset($_POST['update']))
    include 'update.php';

if(isset($_POST['delete']))
    include 'delete.php';

if(isset($_POST['display']))
    include 'display.php';
?>
