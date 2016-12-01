<html>
    <body>
    <h3>Espaco</h3>
<?php
    try
    {
		$type = $_REQUEST['type'];
		$morada = $_REQUEST['morada'];
		require 'bd_init.php';
        $sql = "SELECT espaco.codigo FROM espaco WHERE espaco.morada='$morada';";    
        $result = $db->query($sql);    
        echo("<table border=\"0\" cellspacing=\"5\">\n");
        foreach($result as $row)
        {
            echo("<tr>\n");
            echo("<td>{$row['codigo']}</td>\n");
            echo("<td><a href=\"remove_posto.php?type=$type&morada=$morada&codigo_espaco={$row['codigo']}\">Select</a></td>\n");
            echo("</tr>\n");
        }
        echo("<td><a href=\"remove_confirm.php?type=$type&morada=$morada&codigo_espaco=null&codigo=null\">GO</a></td>\n");
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
        