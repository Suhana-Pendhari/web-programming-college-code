<!-- 7. Write a PHP program using switch case to display grade based on marks. -->

<?php
$marks = 75;

switch(true)
{
    case ($marks >= 80):
        echo "Grade A";
        break;

    case ($marks >= 60):
        echo "Grade B";
        break;

    case ($marks >= 40):
        echo "Grade C";
        break;

    default:
        echo "Fail";
}
?>
