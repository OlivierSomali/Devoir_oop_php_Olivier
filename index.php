<?php
use Devoir_oop_php_Olivier\camions\Camions\Camions;
use Devoir_oop_php_Olivier\camions\Benne\Benne;
use Devoir_oop_php_Olivier\camions\Fuso\Fuso;
use Devoir_oop_php_Olivier\camions\Dina\Dina;

include('camions/camions_lourd.php');
include('camions/benne.php');
include('camions/fuso.php');
include('camions/dina.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir_oop_php_Olivier</title>
</head>
<body>
   <?php
   $camions =new Camions("Benne","MVN.678","toyota"); //appel de fa classe parent
   echo '</br>';
   $camions->afficher_camion();

   echo '</br>';
   ?>
   <?php
   $benne = new Benne("Benne","MVN.789","Toyota");//appel de la classe fille
   echo '</br>';
   $benne->afficher_benne();

   echo '</br>';
   ?>
   <?php
   $fuso = new Fuso("Mitsubishi","MFTBC","Isuzu");//appel de la classe fille
   echo '</br>';
   $fuso->afficher_fuso();
    echo '</br>';
   
   ?> 
   <?php
   $dina= new Dina("Dyna","123LMN","Toyota");//appel de la classe fille
   echo '</br>';
   $dina->afficher_dina();
   ?>
</body>
</html>