<?php

require 'Exo3C.php';
require 'Exo3A.php';

function askUser($nom, $prenom) {
    $fullName = getFullName($nom, $prenom);
    $inventeur = getMC2();

    return "Bonjour $fullName, connaissez-vous $inventeur ?";
}

echo askUser("devoldere", "mickael") . PHP_EOL;