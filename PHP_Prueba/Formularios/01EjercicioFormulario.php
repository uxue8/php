
<html>
<head>
<title>Formulario</title>
<style type="text/css">
.centro {
	display: flex;
	padding: 10px;
}

label {
	margin: 10px;
}

.aficiones {
	display: flex;
}

.aficiones #titulo {
	align-self: center;
}
</style>
</head>
<body>
	<h1>Datos personales(Formulario)</h1>
	<fieldset>
		<legend>Formulario</legend>
		<form action="datos.php" method="post" name="formulario">
		<p>Escriba los siguientes datos:</p>
		<div class="centro">
			<label for="nombre">Nombre: <br> <input type="text" id="nombre"
				name="nombre">
			</label> <label for="apellidos">Apellidos: <br> <input type="text"
				id="apellidos" name="apellidos">
			</label> <label for="edad">Edad: <br> <select id="edad" name="edad">
			
					<option>0-18</option>
					<option>19-30</option>
					<option>30-65</option>
					<option>65+</option>

			</select>
			</label>
		</div>
		<div class="centro">
			<label for="peso">Peso:<br> <input type="text" id="peso" name="peso">Kg

			</label> <label for="sexo">Sexo:<br> <input type="radio" id="sexo"
				name="sexo" value="hombre">Hombre <input type="radio" id="sexo" name="sexo" value="mujer">Mujer
			</label> <label for="estado">Estado civil:<br> <input type="radio"
				id="estado" name="estado"value="soltero">Soltero <input type="radio" id="estado"
				name="estado" value="casado">Casado <input type="radio" id="estado" name="estado"value="otro">Otro

			</label>

		</div>
		<div class="centro">
			<label class="aficiones" for="aficiones">
				<div id="titulo">Aficiones:</div>
				<div>
					<input type="checkbox" id="aficiones" name="aficiones">Cine <input
						type="checkbox" id="aficiones" name="aficiones">Literatura <input
						type="checkbox" id="aficiones" name="aficiones">Tebeos <br> <input
						type="checkbox" id="aficiones" name="aficiones">Deporte <input
						type="checkbox" id="aficiones" name="aficiones">Musica <input
						type="checkbox" id="aficiones" name="aficiones">Television
				</div>

			</label>


		</div>
		<label for="botones"> <input type="submit" value="Enviar"> <input
			type="submit" value="Borrar">
		</label>
		
		</form>
	</fieldset>
	

</body>
</html>