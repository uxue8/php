<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>Ejercicio con POST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
	
	<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $peso = $_POST["peso"];
    $sexo = $_POST["sexo"];
    $estado = $_POST["estado"];

    if ($nombre == null) {
        echo "<p style= color:red> No ha introducido el nombre</p>";
    } else {
        echo "Nombre:" . $nombre . "<br>";
    }
    if ($apellido == null) {
        echo "<p style= color:red> No ha introducido el apellido</p>";
    } else {
        echo "Apellido:" . $apellido . "<br>";
    }
    if ($peso == null) {
        echo "<p style= color:red> No ha introducido el Peso</p>";
    } else {
        echo "Peso:" . $peso . "kg <br>";
    }
    if ($sexo == null) {
        echo "<p style= color:red> No ha introducido el sexo</p>";
    } else if ($sexo == "hombre") {
        echo "Sexo: hombre";
    } else {
        echo "Sexo: mujer";
    }
    if ($estado == "casado") {
        echo "Casado";
    } else if ($estado == "soltero") {
        echo "Soltero";
    } else if ($estado == "otro") {
        echo "otro";
    } else {
        echo "<p style= color:red> No ha introducido el estado</p>";
    }
}
?>
	
	 <br>

</body>
</html>
