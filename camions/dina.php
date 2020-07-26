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
        echo '<h2>'.'le nom de camion est de:'  .  $this->getNom()  . 
        '&nbsp'.'sa marque ' .$this->getMarque() .'&nbsp'.'avec le type de:' . $this->getType()    . '&nbsp' . 'et leur nombre de pneu:' .$this->getNbre_pneu() . 'pneus'. '</h2>';
    }
}



?>