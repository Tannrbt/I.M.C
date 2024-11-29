<?php

     $poids = 70;
     $taille = 1.65;
     
     $imc = $poids / ($taille * $taille);

     if($imc < 18.5){
        echo "Maigre";
     }
     else if($imc < 25){
        echo "Normal";
     }
     else if($imc < 30){
         echo "Surpoids";
    }
    else{
        echo "Obese";
    }

?>