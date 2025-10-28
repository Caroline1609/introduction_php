<?php

function getRetired(int $age): string
{
    $retirementAge = 60;

    if ($age < 0) {

        return "Vous n'êtes pas encore né";

    } else if ($age < $retirementAge) {

        $yearsLeft = $retirementAge - $age;

        return "Il vous reste $yearsLeft ans avant la retraite";

    } else if ($age == $retirementAge) {

        return "Vous êtes à la retraite cette année";

    } else {
        $yearsSince = $age - $retirementAge;

        return "Vous êtes à la retraite depuis $yearsSince ans";

    }
}

echo getRetired(12) . PHP_EOL;  // Il vous reste 48 ans avant la retraite
echo getRetired(60) . PHP_EOL;  // Vous êtes à la retraite cette année
echo getRetired(72) . PHP_EOL;  // Vous êtes à la retraite depuis 12 ans
echo getRetired(-2) . PHP_EOL;  // Vous n'êtes pas encore né



