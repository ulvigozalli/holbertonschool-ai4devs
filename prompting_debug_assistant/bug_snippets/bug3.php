<?php
$taxRate = 0.18;

function calculateTotal($price) {
    global $taxRate;
    $tax = $price * $taxRate;
    $total = $price + $tax;
    return $total;
}

$itemPrice = 100;
$finalTotal = calculateTotal($itemPrice);
if ($finalTotal > 0) {
    echo "Total price with tax: " . $finalTotal;
    echo "\nCalculation success.";
}