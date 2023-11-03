<?php 

    $dias=[
      "Lunes"=>23,
       "Martes"=>12,
        "Miercoles"=>34,
        "Jueves" =>8,
        "Viernes" =>9,
        "Sabado" => 4,
        "Domingo" => 12
    
    ];
    
    $suma = 0;
    $conteo = 0;
    
    // Mostrar cada día y su valor
    foreach ($dias as $dia => $valor) {
        echo "Día: $dia - Valor: $valor<br>";
        
        // Actualizar la suma y el conteo
        $suma += $valor;
        $conteo++;
    }
    
    // Calcular la media
    if ($conteo > 0) {
        $media = $suma / $conteo;
        echo "Suma de los valores: $suma<br>";
        echo "Media de los valores: $media<br>";
    } else {
        echo "No hay datos en el array.";
    }
    ?>



    