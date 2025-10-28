<?php

require 'Exo7B.php'; 


function userLogin(string $username, string $password, array $users): bool
{
    
    if (!array_key_exists($username, $users)) {
        return false; 
    }

    if ($users[$username] !== $password) {
        return false; 
    }

    if (!passwordCheck($password)) {
        return false; 
    }
    return true;
}

$users = [
    'joe' => 'Azer1234!',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer',
];

// Exemples de tests
var_dump(userLogin('joe', 'Azer1234!', $users));   // true
var_dump(userLogin('jack', 'Azer-4321', $users));  // true
var_dump(userLogin('admin', 'wrongpass', $users)); // false
