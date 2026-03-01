<!-- 5. Write a PHP program to calculate water bill using if–else conditions. -->

<?php
$units = 120;

if($units <= 100)
    $bill = $units * 5;
else
    $bill = $units * 10;

echo "Total Bill = " . $bill;
?>
