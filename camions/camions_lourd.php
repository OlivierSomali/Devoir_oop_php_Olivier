<?php

namespace Devoir_oop_php_Olivier\camions\camions;

class camions{

    //attributs
    private $nom;
    private $marque; // les droits d'acces
    private $type;

    public function __construct($nom,$marque,$type) //le constructeur
    {
        $this->nom=$nom;
        $this->marque=$marque; //initialisation des attributs dans le constructeur
        $this->type=$type;
    }
}











?>