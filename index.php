<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>POO PHP</title>
</head>

<body>
  <?php
  require_once 'classes/Compte.classe.php';
  /**
   * On instancie le compte (creation d'un objet)
   */

  $compte1 = new Commpte("Arezki", 1000);
  //On ecrit dans la propriété titulaire
  $res =  $compte1->retirer(990);
  echo $res;
  echo '<br>';
  $compte1->consulterSolde();

  ?>
</body>

</html>