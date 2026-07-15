<?php
$taxRate = 0.18;
function calculateTotal($price) {
    global $taxRate;
    $tax = $price * $taxRate;
    $total = $price + $tax;
    return $total;
}
$itemPrice = 100;
$total = calculateTotal($itemPrice);
$output = "Total is: " . $total;
echo $output;
