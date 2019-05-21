<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 10</title>
    </head>
    
    <body>
        
    <?php
    
    $region = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas de calais', 80 => 'Somme');
    
    foreach ($region as $number => $departement) {
    
    ?>
            
        <p>Le département <?= $departement; ?> se trouve dans le <?= $number ?>!</p>
    <?php } ?>  
            
        
        
    </body>
    
</html>
