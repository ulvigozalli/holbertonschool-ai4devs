<?php
function printNumbers($max) {
    $i = 1;
    while ($i <= $max) {
        echo "Number: " . $i . "\n";
        $i++;
    }
    return true;
}

$limit = 5;
$result = printNumbers($limit);
if ($result) {
    echo "Execution finished successfully.";
}