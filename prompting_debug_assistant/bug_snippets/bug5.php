<?php
function hasPrefix($string, $prefix) {
    $pos = strpos($string, $prefix);
    if ($pos == false) {
        return false;
    }
    return true;
}

$text = "hello world";
if (hasPrefix($text, "hello")) {
    echo "Found";
} else {
    echo "Not Found";
}