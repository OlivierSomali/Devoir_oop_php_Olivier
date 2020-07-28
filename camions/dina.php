<?php

namespace Devoir_oop_php_Olivier\camions\Dina;
use Devoir_oop_php_Olivier\camions\Camions\Camions; // la racine

class Dina extends Camions{  // declaration de la classe fille qui herite la classe parent
    //attribut
    private $nbre_pneu=6;
    
    public function __construct($nom,$marque,$type) //constructeur
    {
        parent::__construct($nom,$marque,$type);//appel de constructeur
    }

    public function getNbre_pneu()// la fonction magique get
    {
        return $this->nbre_pneu;
    }
    public function afficher_dina() //la fonction d'affichage
    {
        echo '<h2>'.'le nom de camion est de:'  .  $this->getNom()  . 
        '&nbsp'.'sa marque ' .$this->getMarque() .'&nbsp'.'avec le type de:' . $this->getType()    . '&nbsp' . 'et leur nombre de pneu:' .$this->getNbre_pneu() . 'pneus'. '</h2>';
    }
}



?>