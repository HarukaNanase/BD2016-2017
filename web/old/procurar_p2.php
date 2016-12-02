<html>
    <body>
    <h3>Lista dos Espacos</h3>
<?php
    try
    {
		$type = $_REQUEST['type'];
		$morada = $_REQUEST['morada'];
		require 'bd_init.php';
        $sql = "SELECT A.morada morada, A.codigo_espaco codigo, SUM(tarifa) total FROM oferta LEFT JOIN (SELECT * FROM posto UNION ALL (SELECT espaco.morada morada, espaco.codigo codigo, espaco.codigo codigo_espaco FROM espaco)) AS A ON oferta.morada = A.morada AND oferta.codigo = A.codigo Where A.morada = '$morada' GROUP BY oferta.morada , A.codigo_espaco;";    
        $result = $db->query($sql); 
		echo("<table border=\"1\" cellspacing=\"2\">\n");
		echo("<tr><td>codigo</td><td>Total Ganho</td></tr>\n");
        foreach($result as $row)
        {			
            echo("<tr>\n");
            echo("<td>{$row['codigo']}</td>\n");
            echo("<td>{$row['total']}</td>\n");
            echo("</tr>\n");
        }
        echo("</table>\n");    
        $db = null;
				echo("<td>	<a href=\"home.php\">HOME</a></td>\n");
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
    </body>
</html>
        