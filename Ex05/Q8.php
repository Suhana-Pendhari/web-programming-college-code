<!-- 8. Write a PHP program to count even and odd numbers from an array. -->

<?php
$arr = array(1,2,3,4,5,6);

$even = 0;
$odd = 0;

foreach($arr as $num)
{
    if($num % 2 == 0)
        $even++;
    else
        $odd++;
}

echo "Even = " . $even . "<br>";
echo "Odd = " . $odd;
?>
