<?php
function printNumbers($max) {
    $i = 1;
    while ($i <= $max) {
        echo "Number: " . $i . "\n";
        $i++;
    }
}
$limit = 5;
if ($limit > 0) {
    printNumbers($limit);
}