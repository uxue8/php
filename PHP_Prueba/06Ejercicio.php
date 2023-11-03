<?php 
 $a=19;
 echo "Estos son los numeros impares menores a ".$a."<br>";
 for($i=0;$i<19;$i++){
     if($i%2!=0){
         echo $i.",";
     }
 }
?>