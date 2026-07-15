<?php
function hasPrefix($string, $prefix) {
    $pos = strpos($string, $prefix);
    if ($pos === 0) {
        $found = true;
        return $found;
    }
    $found = false;
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