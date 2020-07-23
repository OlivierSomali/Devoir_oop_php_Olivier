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

    
}










?>