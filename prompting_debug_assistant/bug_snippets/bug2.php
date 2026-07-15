<?php
function getUserRole($userId) {
    $roles = [
        1 => "Admin",
        2 => "Editor"
    ];
    if (isset($roles[$userId])) {
        return $roles[$userId];
    }
    return "Guest";
}
echo getUserRole(1);