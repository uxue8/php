<?php
$meses = [
    "Enero" => 0,
    "Febrero" => 0,
    "Marzo" => 0,
    "Abril" => 0,
    "Mayo" => 0,
    "Junio" => 0,
    "Julio" => 0,
    "Agosto" => 0,
    "Septiembre" => 0,
    "Octubre" => 0,
    "Noviembre" => 0,
    "Diciembre" => 0
];
$mesl = array(
    "Enero",
    "Marzo",
    "Mayo",
    "Julio",
    "Agosto",
    "Octubre",
    "Diciembre"
);
$mesc = array(
    "Abril",
    "Junio",
    "Septiembre",
    "Noviembre"
);
 
 
foreach($meses as $mes => $dias){
    if(in_array($mes, $mesl)){
        $dias = 31;
    }
    else if(in_array($mes, $mesc)){
        $dias = 30;
    }
    else{
        $dias = cal_days_in_month(CAL_GREGORIAN, 2, 2023);
    }
    
    echo "$mes --> $dias <br>";
}
?>