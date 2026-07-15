<?php
function hasPrefix($string, $prefix) {
    $pos = strpos($string, $prefix);
    if ($pos === 0) {
        return true;
    }
    return false;
}
$text = "hello world";
$search = "hello";
$res = hasPrefix($text, $search);
echo $res;