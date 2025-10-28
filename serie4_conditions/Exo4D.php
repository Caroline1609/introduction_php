<?php
function capitalCity(string $country): string
{
    $country = ucfirst(strtolower($country));

    switch ($country) {
        case "France":
            return "Paris";
        case "Allemagne":
            return "Berlin";
        case "Italie":
            return "Rome";
        case "Maroc":
            return "Rabat";
        case "Espagne":
            return "Madrid";
        case "Portugal":
            return "Lisbonne";
        case "Angleterre":
            return "Londres";
        default:
            return "Capitale inconnue";
    }
}

echo capitalCity("France") . PHP_EOL;      // Paris
echo capitalCity("maroc") . PHP_EOL;       // Rabat
echo capitalCity("ITALIE") . PHP_EOL;      // Rome
echo capitalCity("Belgique") . PHP_EOL;    // Capitale inconnue