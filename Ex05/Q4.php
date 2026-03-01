<!-- 4. Write a PHP program to find the maximum and minimum element from an array. -->

<?php
$arr = array(10, 5, 30, 2, 25);

$max = $arr[0];
$min = $arr[0];

foreach($arr as $value)
{
    if($value > $max)
        $max = $value;

    if($value < $min)
        $min = $value;
}

echo "Max = " . $max . "<br>";
echo "Min = " . $min;
?>
