<?php 

$usuario=array(
    "desarrollador" => 1234

);

    $nom=filter_input(INPUT_POST,"usuario");
    $con=filter_input(INPUT_POST, "contra");
    $bo=filter_input(INPUT_POST,"boton");
    if(isset($bo)){
        if(array_key_exists($nom, $usuario) && in_array($con,$usuario)){
        echo "<h1>Estas en el sistema</h1>";
    
        }
    else {
        echo"<h1 style=color:red;>no estas en el sistema</h1>";
        echo '<a type="button" href="login.html">Volver a login</a>';
    }
    }
    


?>