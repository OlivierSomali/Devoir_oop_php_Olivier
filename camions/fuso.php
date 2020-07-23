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

}








?>