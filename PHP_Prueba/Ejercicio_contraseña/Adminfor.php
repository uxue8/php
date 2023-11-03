<?php 

    $servidor = 'localhost:3306';
    $usuario = 'root';
    $password = '';
    
 
   
    $conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexión");
    $usu=filter_input(INPUT_POST,"user");
    $contra=filter_input(INPUT_POST, "con");
    $opcion=filter_input(INPUT_POST, "tipo");
    $validar=filter_input(INPUT_POST, "validar");
    $encontrado=false;
    $contramal=false;
    mysqli_select_db($conexion,"iniciose");
   
        
    
    if(isset($validar)){
        
        
        
       
        $consulta="SELECT user,pass FROM usuarios WHERE user='$usu'";
        $registros=mysqli_query($conexion,$consulta);
     
  
        //$num_rows= $registro -> num_rows;
        
        
        while($registro=mysqli_fetch_row($registros)){
           
            if($registro[0] == $usu && $registro[1]== $contra){
                $encontrado = TRUE;
            }
            else if($registro[0] == $usu && $registro[1]!= $contra){
                $contramal=true;
            }
            
        }
        
        
        switch($opcion){
           
            case 'alta':
             
                 if (!$encontrado){
                     $insertar = "INSERT usuarios(user, pass) VALUES ('$usu','$contra')";
                     mysqli_query($conexion,$insertar);
                     echo  "El usuario se ha insertado correctamente";
                    
                 }else{
                     echo "ese usuario ya existe en la base de datos";
                 
                 }
                 
                 break;
            case 'baja':
                if(!$encontrado){
                  echo"ese usuario no existe";
                }elseif ($contramal){
                    echo "la contraseña no es correcta";
                }
                else{
                    echo "El usuario se ha conectado";
                    $borrar="DELETE from usuarios WHERE user='$usu'";
                    mysqli_query($conexion,$borrar);
                    echo "<br>El usuario ha sido eliminado";
                    }
                break;
            case 'cambio':
                if($encontrado){
                    
                    echo "usuario conectado";
                    echo "";
                }
                
                break;
            case 'lista':
                if($encontrado){
                    echo "usuario conectado<br>";
                    echo "----------Listado------------<br>";
                    $consulta2="SELECT user FROM usuarios";
                    $registros2=mysqli_query($conexion,$consulta2);
                    while($registro2=mysqli_fetch_row($registros2)){
                        echo $registro2[0];
                        echo "<p> </p>";
                    }
                   
                    
                  
                } else if ($contramal){
                    echo "Contraseña incorrecta";
                }
                else{
                    echo "ese usuario no existe en la base de datos";
                }
                
        }
    }
?>