<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voitures</title>
</head>
<body>
    liste voitures
    <?php foreach($voitures as $voiture){ ?>
        <p>Marque: <?php echo  $voiture->marque ?></p>
        <p>Modèle: <?php echo  $voiture->modele ?></p>
        <p>Année: <?php echo  $voiture->annee ?></p>
        <p>Couleur: <?php echo  $voiture->couleur ?></p>
    <?php } ?>

</body>
</html>