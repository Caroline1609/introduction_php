<?php
function sortItems(array $arr) {
    if (empty($arr)) {
        return [];
    }

    rsort($arr);
    return $arr;
}


$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$sortedNames = sortItems($names);

print_r($sortedNames);

?>
