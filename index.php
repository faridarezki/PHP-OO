<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'classes/Compte.classe.php';
    /**
     * On instancie le compte (creation d'un objet)
     */

    $compte1 = new Commpte();
    //On ecrit dans la propriété titulaire
    $compte1->titulaire = "Arezki";
    $compte2 = new Commpte();
    var_dump($compte1)


    ?>
</body>

</html>