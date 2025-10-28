<?php

function firstItem(array $arr) {
    if (empty($arr)) {
        return null;
    }
    return $arr[0];
}


$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

echo firstItem($names); 
?>
