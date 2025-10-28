<?php

function firstItem(array $arr) {
    if (empty($arr)) {
        return null;
    }
    return $arr[0];
}


$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

echo end($names); 
?>

/* 2e methode */

<?php
function lastItem(array $arr) {
    if (empty($arr)) {
        return null;
    }
    return $arr[count($arr) - 1];
}

// Exemple d'utilisation :
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
echo lastItem($names); // affiche "Néo"
?>
