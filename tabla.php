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

			for ($i=0;$i<$columna;$i++){
				echo $i;
			}
				for($f=0;$f<$columna;$f++){
					echo "<tr>\n";

					for ($i=0; $i <$filas ; $i++) {
						if ($color){
							echo "<td style=background-color:#F5D0A9;></td>\n";
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


