<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie5_Exo10</title>
</head>
<body>
    <?php
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
//Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département
    $departements = array( //Je déclare mon tableau départements. Le tableau est un assemblage de vriable.
      '02' => 'Aisne', // 02 est associé à Aisne.
      '59' => 'Nord',
      '60' => 'Oise',
      '62' => 'Pas de Calais',
      '80' => 'Somme');
    foreach($departements as $key => $valeur){?>
      <p> <?php echo 'Le departement'. ' '. $valeur . ' à le numéro' . ' ' . $key;
    }
?></p>
</body>
</html>
