<?php
 $nombres=[
     "jordi"=> "Jordi Rubio",
     "marta"=> "Marta Fabra",
     "eva" => "Eva Palacio",
     "toni" => "Antonio Comas",
     "emilio" => "Emilio Morales",
     "fco" => "Francisco Cascales"
 ];
 
 echo "<h1>Array asociativo</h1>";
 
 echo "<h4>Mostrar el array</h4>";
 foreach ($nombres as $nombre => $apellido) {
     
     echo $nombre ."<br>".$apellido."<br>";
     
 }
 echo "<h4>Ordenar por la clave</h4>";
 ksort($nombres);
 foreach ($nombres as $nombre => $apellido) {
     
     echo $nombre ."<br>".$apellido."<br>";
     
 }
 echo "<h4>Ordenar por el contenido</h4>";
 natsort($nombres);
 foreach ($nombres as $nombre => $apellido) {
     
     echo $nombre ."<br>".$apellido."<br>";
     
 }
 
?>