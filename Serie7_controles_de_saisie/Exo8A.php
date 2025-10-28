<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo tableau</title>
</head>
<body>
    <?php
        $names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo' ];

        asort($names);

        echo "Liste html";
        echo '<ul>'; //crée le ul 

        if ((empty($names))) {
           echo "Aucun résultat";
        } else {
           foreach ($names as $value) {
            echo '<li>'. $value . ' </li>' ;
            }
        }
        

        echo '</ul>';
    ?>
</body>
</html>