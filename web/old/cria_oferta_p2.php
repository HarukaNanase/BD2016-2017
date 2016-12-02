<html>
    <body>
    <h3>Cria oferta - Escolher Alugavel - Parte 2</h3>
<?php
    try
    {
		$morada = $_REQUEST['morada'];
		require 'bd_init.php';
        $sql = "SELECT espaco.codigo FROM espaco WHERE espaco.morada='$morada';";    
        $result = $db->query($sql);    	
		echo("<table border=\"1\" cellspacing=\"2\">\n");
        foreach($result as $row)
        {
            echo("<tr>\n");
            echo("<td>{$row['codigo']}</td>\n");
            echo("<td><a href=\"cria_oferta_p3.php?type=$type&morada=$morada&codigo_espaco={$row['codigo']}\">Select</a></td>\n");
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
        