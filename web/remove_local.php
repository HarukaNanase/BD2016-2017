<html>
    <body>
    <h3>Remove</h3>
	<?php
		try
		{
			echo("<table border=\"1\" cellspacing=\"2\">\n");
			echo("<tr><td>??</td><td>??</td><td>??</td></tr>\n");
				echo("<tr>\n");
				echo("<td><a href=\"remove_edificio.php?type=edificio\">edificio</a></td>\n");
				echo("<td><a href=\"remove_edificio.php?type=espaco\">espaco</a></td>\n");
				echo("<td><a href=\"remove_edificio.php?type=posto\">posto</a></td>\n");
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
        