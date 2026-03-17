<!-- 2.	Design a web form to accept Email and Phone Number. Validate that 
Email format is correct and Phone Number contains only digits. -->


<html>
<body>

<form method="post">
    Email: <input type="text" name="email"><br><br>
    Phone: <input type="text" name="phone"><br><br>
    <input type="submit" name="submit" value="Validate">
</form>

<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$/", $email))
    {
        echo "Invalid Email<br>";
    }
    elseif(!preg_match("/^[0-9]+$/", $phone))
    {
        echo "Phone must contain only digits<br>";
    }
    else
    {
        echo "Valid Email and Phone Number";
    }
}
?>

</body>
</html>
