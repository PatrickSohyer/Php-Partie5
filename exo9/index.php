<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 9</title>
    </head>
    
    <body>
        
    <?php
    
    $region = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas de calais', 80 => 'Somme');
    
    foreach ($region as $number => $departement) {
    
    ?>
            
        <p><?= $departement; ?>!</p>
    <?php } ?>    
        
    </body>
    
</html>
