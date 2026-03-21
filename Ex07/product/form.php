<?php include 'db.php'; ?>

<h2>Product Form</h2>

<form method="post">
    ID (for Update/Delete): <input type="number" name="id"><br><br>
    Name: <input type="text" name="name"><br><br>
    Price: <input type="number" name="price"><br><br>
    Quantity: <input type="number" name="qty"><br><br>
    Discount: <input type="number" name="discount"><br><br><br>

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
