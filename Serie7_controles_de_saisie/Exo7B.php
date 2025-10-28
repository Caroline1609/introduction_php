<?php

function stringLength(string $str): bool
{
    return strlen($str) >= 9;
}

function passwordCheck(string $password): bool
{
    
    if (!stringLength($password)) {
        return false;
    }

    if (!preg_match('/\d/', $password)) {
        return false;
    }

    if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        return false;
    }

    if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
        return false;
    }


    return true;
}



