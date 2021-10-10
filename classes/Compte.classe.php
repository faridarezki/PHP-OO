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
    public $newsolde;

    public function __construct(string $titulaire, float $solde)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }
       public function consulterSolde()
    {
        echo "Votre solde est de : ".$this->solde;
      
    } 

    public function retirer(int $montant)
    {
        if ($montant >= $this->solde) {
            $this->solde=$this->solde;
          return  "Vous n'avez pas assez sur votre compte pour retirez    ";
        } else {
            $this->solde = ($this->solde - $montant);
          echo "votre nouveau solde est de : " . $this->solde . " euros";

        }
    }
 
}
