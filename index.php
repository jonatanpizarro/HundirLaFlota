<!DOCTYPE html>
<style type="text/css">
	#fil {
		display: block;
	}

	#a {
		margin-left: 40px;
	}


</style>

<html>
<head>
	<title>Hundir la flota</title>
</head>
<body>
	<div id="contenedor">

		<h2>Formulario batalla naval</h2>

		
		<form action="tabla.php" method="POST">

			<div id="fil">
		
				<label for="fila">Filas              </label>
				
				<input type="number" name="fila" id="a" >
			</div>

			<div id="col">
				<label for="colum">Columnas  </label>
				
				<input type="number" name="colum"/>

			</div>

			<input type="submit" value="Enviar"/>
				

		</form>
		



	</div>

</body>
</html>






