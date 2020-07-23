<?php
namespace Devoir_oop_php_Olivier\camions\Fuso;
use Devoir_oop_php_Olivier\camions\Camions\Camions;

class Fuso extends Camions{
    
    //attribut
    private $bagage;

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
        echo  'le nom de camion est de:'  . $this->getNom() .
        'sa marque est de :' . $this->getMarque() .
        'et le type de :' .$this->getType() . 'et le bagage de :' . $this->getBagage();
    }

}








?>