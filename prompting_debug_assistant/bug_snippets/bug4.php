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
$data = ["A", "B"];
print_r(getFirstElements($data, 2));