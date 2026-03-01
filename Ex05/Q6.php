<!-- 6. Write a PHP function to check whether a number is palindrome. -->

<?php
function palindrome($n)
{
    $rev = strrev($n);
    if($n == $rev)
        echo "Palindrome";
    else
        echo "Not Palindrome";
}

palindrome(121);
?>
