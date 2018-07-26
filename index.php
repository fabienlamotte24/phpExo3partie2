<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
<?php
/*Les variables*/
  $age = 26;
  $gender = 'femme';
  /*Condition switch pour gérer plusieurs cas*/
  switch($age && $gender){
    /*Gestion de tout les cas demandé*/
    case $age >= 18 && $gender == 'homme':
    echo 'tu es un homme majeur';
    break;
    case $age < 18 && $gender == 'homme';
    echo 'tu es un homme mineur';
    break;
    case $age >= 18 && $gender == 'femme';
    echo 'tu es une femme majeure';
    break;
    case $age < 18 && $gender == 'femme';
    echo 'tu es une femme mineure';
  }
?>
    </p>
  </body>
</html>
