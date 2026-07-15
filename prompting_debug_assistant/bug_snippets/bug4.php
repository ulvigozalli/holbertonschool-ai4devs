<?php
function getFirstElements($array, $count) {
    $result = [];

    for ($i = 0; $i < $count; $i++) {
        if (isset($array[$i])) {
            $result[] = $array[$i];
        }
    }
    return $result;
}

$data = ["Apple", "Banana", "Cherry"];
$subset = getFirstElements($data, 2);
if (count($subset) > 0) {
    print_r($subset);
}