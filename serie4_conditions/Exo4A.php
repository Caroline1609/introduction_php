<?php

function isMajor(int $age) {
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}

var_dump(isMajor(12)); // bool(false)
var_dump(isMajor(18)); // bool(true)
var_dump(isMajor(42)); // bool(true)