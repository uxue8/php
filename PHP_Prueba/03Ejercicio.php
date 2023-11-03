<?php
    $a=5;
    $b=1;
    $c=8;
    echo "los numeros son ".$a.",".$b."y".$c;
    if($a==$b){
        echo "dos de los numeros son iguales a".$a;
    }
    elseif($a==$c){
        echo"dos de los numeros son iguales a".$a;
    }
    elseif($b==$c){
        echo"dos de los numeros son iguales a".$b;
    }
    elseif($a==$b && $a==$c){
        echo "todos los numeros son iguales a ".$a;
    }
    else{
        echo "ningun numero es igual";
    }
    
?>