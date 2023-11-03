<?php
 $a=9;
 
 if($a>="A" && $a<="Z"){
     echo  $a." Es mayuscula";
 }
 
 elseif($a>="a" && $a<="z"){
     echo $a. "Es minuscula";
 }
 elseif($a=="." || $a==","){
     echo $a. "Es un signo de puntuacion";
 }
 elseif($a==null){
     echo "no hay nada ";
 }
  
?>