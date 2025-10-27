<?php
/**
 * Retourne "Hello $name !" 
 * ou "Nobody" si le nom est vide.
 */
function hello($name)
{
    if ($name == "") {
        return "Nobody";
    } else {
        return "Hello $name !";
    }
}

// Tests de la fonction
echo hello("Mike");   // Hello Mike !
echo "\n";
echo hello("");       // Nobody
