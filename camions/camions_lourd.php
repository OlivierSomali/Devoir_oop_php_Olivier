<?php

Namespace Devoir_oop_php_Olivier\camions\Camions;

class Camions{

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

    public function getNom()  //la fonction get magique
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
        return $this;
    }
    public function getMarque()
    {
         return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque=$marque;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type=$type;
        return $this;
    }
    public function afficher_camion() //fonction d'affichage
    {
        echo '<h2>'.'le camion est:' . $this->getNom()  . 
        '&nbsp'.'sa marque est :' .  $this->getMarque()  . '&nbsp'.'et le type de :'  . $this->getType().'</h2>' ;
    }
}
 











?>