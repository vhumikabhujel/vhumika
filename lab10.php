<?php
$age = 25;
$isStudent = true;

if ($age >= 18) {
    if ($isStudent) {
        echo "You are eligible for a student discount!";
    } else {
        echo "You are eligible for a general discount.";
    }
} else {
    echo "Sorry, you are not eligible for any discounts.";
}

?>