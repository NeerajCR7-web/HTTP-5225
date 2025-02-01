<?php

$myHour = date("H"); //https://www.w3schools.com/php/php_date.asp


if ($myHour >= 5 && $myHour < 9) {
    echo "Breakfast: Bananas, Apples, and Oats";
} elseif ($myHour >= 12 && $myHour < 14) {
    echo "Lunch: Fish, Chicken, and Vegetables";
} elseif ($myHour >= 19 && $myHour < 21) {
    echo "Dinner: Steak, Carrots, and Broccoli";
} else {
    echo "No feeding at this time.";
}
?>
