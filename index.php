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
  <form method="POST" action="#">
    <label for="sommeDepose ">Somme à deposer</label>
    <input type="text" name="sommeDepose">
    <label for="titulaireCompte ">Titulaire</label>
    <input type="text" name="titulaireCompte">
    <label for="sommeRetire ">Somme à retirer</label>
    <input type="text" name="sommeRetire">
    <input type="submit" value="Retirer">


  </form>
  <?php
  require_once 'classes/Compte.classe.php';
  /**
   * On instancie le compte (creation d'un objet)
   */
  $titulaireCompte = $_POST['titulaireCompte'];
  $sommeDepose = $_POST['sommeDepose'];
  $compte1 = new Commpte($titulaireCompte, $sommeDepose);
  //On ecrit dans la propriété titulaire
  $sommeRetire = $_POST['sommeRetire'];
  $compte1->retirer($sommeRetire);



  echo '<br>';
  //$compte1->consulterSolde();

  ?>

</body>

</html>