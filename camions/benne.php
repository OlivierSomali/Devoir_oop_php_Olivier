<?php
namespace Devoir_oop_php_Olivier\camions\Benne;
use Devoir_oop_php_Olivier\camions\Camions\Camions;

class Benne extends Camions{
     //attribut
    private $poids;
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
        echo 'le nom de camion est de:'  . $this->getNom() .
        'sa marque est de :' . $this->getMarque() .
        'et le type de :' .$this->getType() . 'avec le poid de :' . $this->getPoids();
    }

    
}










?>