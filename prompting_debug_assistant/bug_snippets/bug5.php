<?php
function hasPrefix($string, $prefix) {
    $pos = strpos($string, $prefix);

    if ($pos === false) {
        $found = false;
        return $found;
    }
    $found = true;
    return $found;
}

$text = "hello world";
$search = "hello";
$result = hasPrefix($text, $search);
if ($result) {
    echo "Prefix found!";
} else {
    echo "Prefix not found!";
}