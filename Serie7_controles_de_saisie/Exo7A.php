<?php

function stringLength(string $str): bool
{
    return strlen($str) >= 9;
}

var_dump(stringLength("MotDePasseLong")); // bool(true)
var_dump(stringLength("azer"));           // bool(false)
