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

if (isset($_GET['dia'])) {
    $diaSeleccionado = $_GET['dia'];
    
    // Verificar si el día seleccionado existe en el array
    if (array_key_exists($diaSeleccionado, $dias)) {
        $valorSeleccionado = $dias[$diaSeleccionado];
        echo "Día seleccionado: $diaSeleccionado - Valor: $valorSeleccionado";
    } else {
        echo "El día seleccionado no existe en el array.";
    }
} else {
    echo "Por favor, proporciona un día por URL.";
}
?>



