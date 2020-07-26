<?php
namespace Devoir_oop_php_Olivier\camions\Fuso;
use Devoir_oop_php_Olivier\camions\Camions\Camions;

class Fuso extends Camions{
    
    //attribut
    private $bagage="grand";

    public function __construct($nom,$marque,$type)
    {
        parent::__construct($nom,$marque,$type);
    
    }

    public function getBagage()
    {
        return $this->bagage;
    }
    public function afficher_fuso()
    {
        echo  '<h2>'. 'le nom de camion est de:'  . $this->getNom()   .
        '&nbsp'.'sa marque est de :' . $this->getMarque() .
        '&nbsp'.'et le type de :' .$this->getType() . '&nbsp'.'et le bagage de :' . $this->getBagage() .'</h2>';
    }

}








?>