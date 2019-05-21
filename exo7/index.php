<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Exercice 7</title>
</head>

<body>

    <?php
    
    $region = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas de calais', 80 => 'Somme');
    
    array_push($region[51] = 'Marne');
    
    ?>
    
    <p><?= $region[51]; ?></p>
    
    
</body>

</html>
