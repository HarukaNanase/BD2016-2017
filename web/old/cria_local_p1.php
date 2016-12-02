<html>
    <body>
    <h3>Cria Local - Escolher Tipo - Parte 1</h3>
		<?php
			try
			{
				echo("<table border=\"1\" cellspacing=\"2\">\n");
				echo("<tr>\n");
				echo("<td><a href=\"cria_local_edificio_p1.php?type=edificio\">edificio</a></td>\n");
				echo("<td><a href=\"cria_local_p2.php?type=espaco\">espaco</a></td>\n");
				echo("<td><a href=\"cria_local_p2.php?type=posto\">posto</a></td>\n");
				echo("</tr>\n");
			echo("</table>\n");
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e)
			{
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
	</body>
</html>