<html>
    <body>
    <h3>Lista dos Espacos</h3>
<?php
    try
    {
		$type = $_REQUEST['type'];
		$morada = $_REQUEST['morada'];
		require 'bd_init.php';
        $sql = "SELECT espaco.codigo FROM espaco WHERE espaco.morada='$morada';";    
        $result = $db->query($sql);    	
		echo("<table border=\"1\" cellspacing=\"2\">\n");
		echo("<tr><td>codigo</td><td>Total Ganho</td></tr>\n");
				
        foreach($result as $row)
        {
			$valor = "???";
			
            echo("<tr>\n");
            echo("<td>{$row['codigo']}</td>\n");
            echo("<td>$valor</td>\n");
            echo("</tr>\n");
        }
        cho("</table>\n");    
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
        