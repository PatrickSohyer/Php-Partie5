<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    
    <body>
        
<?php 

$month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

foreach ($month as $key) {
    
?>
        
<p>Ceci est le mois de <?= $key; ?></p> <?php } ?>
            
        
        
    </body>
    
</html>
