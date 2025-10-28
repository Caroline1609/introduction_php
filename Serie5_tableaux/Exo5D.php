<?php
function stringItems(array $arr) {
    if (empty($arr)) {
        return "Nothing to display";
    }

    sort($arr);

    return implode(", ", $arr);
}

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
echo stringItems($names); 

?>
