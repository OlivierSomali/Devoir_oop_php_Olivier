<?php

namespace Devoir_oop_php_Olivier\camions\Dina;
use Devoir_oop_php_Olivier\camions\Camions\Camions;

class Dina extends Camions{
    //attribut
    private $nbre_pneu=6;
    
    public function __construct($nom,$marque,$type)
    {
        parent::__construct($nom,$marque,$type);
    }

    public function getNbre_pneu()
    {
        return $this->nbre_pneu;
    }
    public function afficher_dina()
    {
        echo 'le nom de camion est de:'  .  $this->getNom()  . 
         'sa marque ' .$this->getMarque() . 'avec le type de:' . $this->getType() . 'et leur nombre de pneu:' .$this->getNbre_pneu();
    }
}



?>