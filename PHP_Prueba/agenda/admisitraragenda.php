<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $agenda= array(
        'iker'=> '333 333',
        'xabi'=> '222 222'
        
    
    );
   
    $nombreM= $_POST["izena"];
    $telefono= $_POST["tel"];
    $boton=$_POST["gorde"];
    
    if($boton!=null){
        if($nombreM!=null && $telefono!=null){
            if(!array_key_exists($nombreM, $agenda)){
                echo"el usuario se ha introducido";
                $agenda[$nombreM]=$telefono;
                
            }
            else if(array_key_exists($nombreM, $agenda)){
                $agenda[$nombreM]=$telefono;
            }
            

      
        }
        else if(array_key_exists($nombreM, $agenda)&& $telefono==null){
            unset($agenda[$nombreM]);
            echo "se ha eliminado el contacto";
        }
    
    echo"<table>";
    foreach ($agenda as $nom => $tel){
        echo "<tr><td>".$nom."</td>"."<td>".$tel."</tr></td>";
    }
    echo "</table>";
    }
    
    

   
    
}
    
        ?>