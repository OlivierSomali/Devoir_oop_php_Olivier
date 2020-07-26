<?php
namespace Devoir_oop_php_Olivier\camions\Benne;
use Devoir_oop_php_Olivier\camions\Camions\Camions;

class Benne extends Camions{
     //attribut
    private $poids=100;
    public function __construct($nom,$marque,$type)
    {
        parent::__construct($nom,$marque,$type);
        
    }
    public function getPoids()
    {
        return $this->poids;
    }

    public function afficher_benne()
    {
        echo '<h2>'.'le nom de camion est de:'  . $this->getNom() .
        '&nbsp'.'sa marque est de :' . $this->getMarque() .
        '&nbsp'.'et le type de :' .$this->getType() . '&nbsp'.'avec le poid de :' . $this->getPoids() .'</h2>';
    }

    
}










?>