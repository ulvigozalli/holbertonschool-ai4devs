<?php
function printColors($colors) {
    $total = count($colors);
    for ($i = 0; $i <= $total; $i++) {
        echo $colors[$i] . " ";
    }
}

$list = ["red", "green", "blue"];
printColors($list);