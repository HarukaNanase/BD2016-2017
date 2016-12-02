<html>
    <body>
    <h3>Remove Posto</h3>
<?php
    try
    {
		$type = $_REQUEST['type'];
		$morada = $_REQUEST['morada'];
		$codigo_espaco = $_REQUEST['codigo_espaco'];
		require 'bd_init.php';    
        $sql = "SELECT posto.codigo FROM posto WHERE posto.morada='$morada' and posto.codigo_espaco='$codigo_espaco';";
        $result = $db->query($sql);
		echo("<table border=\"1\" cellspacing=\"2\">\n");
        foreach($result as $row)
        {
            echo("<tr>\n");
            echo("<td>{$row['codigo']}</td>\n");
            echo("<td><a href=\"remove_confirm.php?type=$type&morada=$morada&codigo_espaco=$codigo_espaco&codigo={$row['codigo']}\">Select</a></td>\n");
            echo("</tr>\n");
        }
        echo("<td><a href=\"remove_confirm.php?type=$type&morada=$morada&codigo_espaco=null&codigo=$codigo_espaco\">GO</a></td>\n");
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
        