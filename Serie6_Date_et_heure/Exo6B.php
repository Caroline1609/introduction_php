<?php
/**
 * Version simple pour débutant
 * Calcule le temps restant jusqu'à une date donnée.
 */
function getTimeLeft(string $dateStr): string
{
    $timestamp = strtotime($dateStr);
    if (!$timestamp) {
        return "Date invalide";
    }

    $today = strtotime(date("Y-m-d"));


    $diff = $timestamp - $today;

    if ($diff < 0) {
        return "Évènement passé";

    } elseif ($diff == 0) {
        return "Aujourd'hui";
    } else {

        $days = floor($diff / (60 * 60 * 24));

        if ($days < 30) {
            // Si moins de 30 jours, on affiche seulement les jours
            return "Dans $days jour" . ($days > 1 ? "s" : "");
        } elseif ($days < 365) {
            // Si moins d'un an, on calcule les mois et les jours restants
            $months = floor($days / 30);          // Approximation : 1 mois = 30 jours
            $remainingDays = $days % 30;          // Les jours restants après les mois
            return "Dans $months mois" 
                   . ($remainingDays > 0 ? " et $remainingDays jour" . ($remainingDays > 1 ? "s" : "") : "");
        } else {
            // Si plus d'un an, on calcule les années et les mois restants
            $years = floor($days / 365);          // Approximation : 1 an = 365 jours

            $remainingDays = $days % 365;         // Les jours restants après les années

            $months = floor($remainingDays / 30); // Conversion des jours restants en mois
            return "Dans $years an" . ($years > 1 ? "s" : "") 
                   . ($months > 0 ? " et $months mois" : "");
        }
    }
}


echo getTimeLeft("2019-09-29") . PHP_EOL; // Évènement passé
echo getTimeLeft(date("Y-m-d")) . PHP_EOL; // Aujourd'hui
echo getTimeLeft("2020-02-15") . PHP_EOL; // Dans X jours
echo getTimeLeft("2020-05-16") . PHP_EOL; // Dans X mois et Y jours
echo getTimeLeft("2021-05-30") . PHP_EOL; // Dans X an(s) et Y mois
