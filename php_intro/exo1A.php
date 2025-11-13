<?php

function hello($name)
{
    if ($name == "") {
        return "Nobody";
    } else {
        return "Hello $name !".PHP_EOL;
    }
}


echo hello("Mike");
echo hello("");
