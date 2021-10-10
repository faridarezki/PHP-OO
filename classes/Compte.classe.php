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
    public $newSolde;

    public function __construct(string $titulaire, float $solde)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    /**
     * 
     * Retire un montant du solde du compte
     * 
     * @param float $montant  Montant à retirer
     * @return void
     */

    public function retirer(float $montant)
    {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
            echo $this->titulaire . ' ton solde est de : ' . $this->solde;
        } else {
            //   echo "votre nouveau solde est de : " . $this->solde . " euros";
            return  "Montant invalide ou insuffisant";
        }
    }
}
