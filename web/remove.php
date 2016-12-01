<html>
    <body>
    <h3>Remove</h3>
	<?php
		try
		{
			echo("<table border=\"0\" cellspacing=\"5\">\n");
				echo("<tr>\n");
				echo("<td><a href=\"remove_edificio.php?type=edificio\">edificio</a></td>\n");
				echo("<td><a href=\"remove_edificio.php?type=espaco\">espaco</a></td>\n");
				echo("<td><a href=\"remove_edificio.php?type=posto\">posto</a></td>\n");
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
        