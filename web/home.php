<html>
    <body>
    <h3>HOME</h3>
	<?php
		try
		{
			echo("<table border=\"0\" cellspacing=\"5\">\n");
				echo("<tr>\n");
				echo("<td><a href=\"remove_local.php\">remove local</a></td>\n");
				echo("<td><a href=\"home.php\">insere local</a></td>\n");
				echo("<td><a href=\"home.php\">cria oferta</a></td>\n");
				echo("<td><a href=\"remove_oferta.php\">remove oferta</a></td>\n");
				echo("<td><a href=\"cria_reserva_p1.php\">cria reserva</a></td>\n");
				echo("<td><a href=\"home.php\">pagar reserva</a></td>\n");
				echo("<td><a href=\"home.php\">procurar</a></td>\n");
				echo("</tr>\n");
			echo("</table>\n");
		}
		catch (PDOException $e)
		{
			echo("<p>ERROR: {$e->getMessage()}</p>");
		}
	?>
    </body>
</html>
        