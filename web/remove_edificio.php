<html>
    <body>
    <h3>remove Edificio</h3>
		<?php
			try
			{
				$type = $_REQUEST['type'];
				require 'bd_init.php';			
				$sql = "SELECT edificio.morada FROM edificio;";			
				$result = $db->query($sql);			
				echo("<table border=\"0\" cellspacing=\"5\">\n");
				foreach($result as $row)
				{
					echo("<tr>\n");
					echo("<td>{$row['morada']}</td>\n");
					echo("<td><a href=\"remove_espaco.php?type=$type&morada={$row['morada']}\">Select</a></td>\n");
					echo("</tr>\n");
				}
				echo("</table>\n");			
				$db = null;
				echo("<td><a href=\"remove.php\">HOME</a></td>\n");
			}
			catch (PDOException $e)
			{
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
	</body>
</html>
        