	<style>
		td{
			width: 50px;
			height: 50px;

		}
	</style>
	
	<table>
	
		<?php

			$filas = $_POST["fila"];
	
			$columna = $_POST["colum"];

			$color = true;

			
				for($f=0;$f<$columna;$f++){
					echo "$i";
					echo "<tr>\n";

					for ($i=0; $i <$filas ; $i++) {
						if ($color){
							echo "<td style=background-color:#0000FF;></td>\n";
							$color=false;

						}else{
							echo "<td></td>\n";
							$color=true;
						} 
						

					}

					echo "</tr>\n";
				}
		?>





	</table>


