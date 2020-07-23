<?php
use Devoir_oop_php_Olivier\camions\Camions\Camions;
use Devoir_oop_php_Olivier\camions\Benne\Benne;
use Devoir_oop_php_Olivier\camions\Fuso\Fuso;

include('camions/camions_lourd.php');
include('camions/benne.php');
include('camions/fuso.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $camions =new Camions("Benne","MVN.678","toyota");
   $camions->afficher_camion();

   echo '</br>';

   $benne = new Benne("100kg");
   $benne->afficher_benne();
   echo '</br>';

   $fuso = new Fuso("grand");
   $fuso->afficher_fuso();
   
   ?> 
</body>
</html>