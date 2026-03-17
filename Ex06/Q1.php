<!-- 1.	Design a web form to accept name and Annual Income and calculate income tax 
based on slab rates. Validate that income is numeric and positive and name is required. -->

<html>
<body>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Annual Income: <input type="text" name="income"><br><br>
    <input type="submit" name="submit" value="Calculate Tax">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $income = $_POST['income'];

    if($name == "")
    {
        echo "Name is required<br>";
    }
    elseif(!preg_match("/^[0-9]+$/", $income) || $income <= 0)
    {
        echo "Income must be positive numeric value<br>";
    }
    else
    {
        if($income <= 250000)
            $tax = 0;
        elseif($income <= 500000)
            $tax = ($income - 250000) * 0.05;
        else
            $tax = ($income - 500000) * 0.1 + 12500;

        echo "Hello $name<br>";
        echo "Tax = $tax";
    }
}
?>

</body>
</html>
