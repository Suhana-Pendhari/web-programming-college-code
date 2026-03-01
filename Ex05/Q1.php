<!-- 1. Write a PHP program to check whether a given number is prime or not. -->

<?php
$n = 7;
$flag = 1;

for($i=2; $i<$n; $i++)
{
    if($n % $i == 0)
    {
        $flag = 0;
        break;
    }
}

if($flag == 1)
    echo "Prime";
else
    echo "Not Prime";
?>
