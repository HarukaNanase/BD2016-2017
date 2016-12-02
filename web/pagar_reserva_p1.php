<html>
    <body>
    <h3>Pagar reservas</h3>
		<?php
			try
			{		
				require 'bd_init.php';			
				$sql = "SELECT aluga.morada, aluga.codigo, aluga.data_inicio, aluga.nif, aluga.numero FROM aluga;";			
				$result = $db->query($sql);			
				echo("<table border=\"1\" cellspacing=\"2\">\n");
				echo("<tr><td>morada</td><td>codigo</td><td>data_inicio</td><td>nif</td><td>numero</td><td></td><td>Estado</td></tr>\n");
				foreach($result as $row){
					require 'bd_init.php';			
					$sql = "SELECT estado.time_stamp, estado.estado FROM estado WHERE estado.numero='{$row['numero']}';";	
					$timestamps = $db->query($sql);
					$data = date("Y-m-d");
					$estado = "";
					foreach($timestamps as $ts){
						$d = strtotime($ts['time_stamp']);
						$data = date("Y-m-d", $d);
						$estado = $ts['estado'];
						
					}
					echo("<tr>\n");
					echo("<td>{$row['morada']}</td>\n");
					echo("<td>{$row['codigo']}</td>\n");
					echo("<td>{$row['data_inicio']}</td>\n");
					echo("<td>{$row['nif']}</td>\n");
					echo("<td>{$row['numero']}</td>\n");
					echo("<td><a href=\"pagar_reserva_p2.php?numero={$row['numero']}&timestamp=$data\">Select</a></td>\n");
					echo("<td>$estado</td>\n");
					
					
					echo("</tr>\n");
				}
				echo("</table>\n");			
				$db = null;
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e)
			{
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>