<html>
    <body>
    <h3>REmove Oferta</h3>
		<?php
			try
			{		
				require 'bd_init.php';			
				$sql = "SELECT oferta.morada, oferta.codigo, oferta.data_inicio, oferta.data_fim, oferta.tarifa FROM oferta;";			
				$result = $db->query($sql);			
				echo("<table border=\"1\" cellspacing=\"2\">\n");
				echo("<tr><td>morada</td><td>codigo</td><td>data_inicio</td><td>data_fim</td><td>tarifa</td><td>??</td></tr>\n");
				foreach($result as $row)
				{
					echo("<tr>\n");
					echo("<td>{$row['morada']}</td>\n");
					echo("<td>{$row['codigo']}</td>\n");
					echo("<td>{$row['data_inicio']}</td>\n");
					echo("<td>{$row['data_fim']}</td>\n");
					echo("<td>{$row['tarifa']}</td>\n");
					echo("<td><a href=\"remove_oferta_selec.php?morada={$row['morada']}&codigo={$row['codigo']}&data_inicio={$row['data_inicio']}\">Select</a></td>\n");
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