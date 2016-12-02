<html>
    <body>
    <h3>Cria Local - Escolher Tipo - Parte 3</h3>
<?php
    try
    {
		$type = $_REQUEST['type'];
		$morada = $_REQUEST['morada'];
		require 'bd_init.php';
        $sql = "SELECT espaco.codigo FROM espaco WHERE espaco.morada='$morada';";    
        $result = $db->query($sql);    	
		echo("<table border=\"1\" cellspacing=\"2\">\n");
        foreach($result as $row)
        {
            echo("<tr>\n");
            echo("<td>{$row['codigo']}</td>\n");
            echo("<td><a href=\"cria_local_posto_p1.php?type=$type&morada=$morada&codigo_espaco={$row['codigo']}\">Select</a></td>\n");
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
        