<?php
function getUserRole($userId) {
    $roles = [
        1 => "Admin",
        2 => "Editor",
        3 => "Subscriber"
    ];

    if (isset($roles[$userId])) {
        $role = $roles[$userId];
        return $role;
    }
    return "Guest";
}

$testId = 4;
$role = getUserRole($testId);
if ($role !== "Guest") {
    echo "User role is valid: " . $role;
} else {
    echo "User role is: " . $role;
}