<html>
    <body>
    <h3>remove Edificio</h3>
		<?php
			try
			{
				$type = $_POST['type'];
				require 'bd_init.php';			
				$sql = "SELECT edificio.morada FROM edificio;";			
				$result = $db->query($sql);
				echo("<table border=\"1\" cellspacing=\"2\">\n");
				foreach($result as $row)
				{
					echo("<tr>\n");
					echo("<td>{$row['morada']}</td>\n");
					echo("<td><a href=\"procurar_p2.php?morada={$row['morada']}\">Select</a></td>\n");
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
        