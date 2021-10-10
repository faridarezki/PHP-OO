<?php 
/**
 * Objet Compte bancaire
 */
class Commpte 
{

/**
 * Titulaire du compte
 *
 * @var string
 */

public $titulaire;
/**
 * Solde du compte
 *
 * @var float
 */

public $solde;

public function __construct(string $titulaire,float $solde)
{
$this->titulaire=$titulaire;
$this->solde=$solde;
}
public function verif(){

if($this->solde<0){
  echo "Attention vous êtes à decouvert de ".abs($this->solde)." euros";
}else {
    echo "vous avez un solde de ".$this->solde;
}

}
    
}






?>