<html>
    <body>
    <h3>Criar Reserva - Select User para reservar</h3>
		<?php
			try{		
				$morada = $_REQUEST['morada'];	
				$codigo = $_REQUEST['codigo'];	
				$data_inicio = $_REQUEST['data_inicio'];		
				require 'bd_init.php';			
				$sql = "SELECT user.nome, user.nif, user.telefone FROM user;";			
				$result = $db->query($sql);			
				echo("<table border=\"1\" cellspacing=\"2\">\n");
				echo("<tr><td>nome</td><td>nif</td><td>telefone</td></tr>\n");
				foreach($result as $row)
				{
					echo("<tr>\n");
					echo("<td>{$row['nome']}</td>\n");
					echo("<td>{$row['nif']}</td>\n");
					echo("<td>{$row['telefone']}</td>\n");
					echo("<td><a href=\"cria_reserva_suc.php?morada=$morada&codigo=$codigo&data_inicio=$data_inicio&nif={$row['nif']}\">Select</a></td>\n");
					echo("</tr>\n");
				}
				echo("</table>\n");			
				$db = null;
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>