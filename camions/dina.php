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
}



?>