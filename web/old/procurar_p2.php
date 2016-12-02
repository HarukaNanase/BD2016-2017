<html>
    <body>
    <h3>Lista dos Espacos</h3>
<?php
    try
    {
		$type = $_REQUEST['type'];
		$morada = $_REQUEST['morada'];
		require 'bd_init.php';
        $sql = "SELECT oferta.codigo codigo, SUM(oferta.tarifa) total FROM edificio, alugavel, oferta WHERE edificio.morada = alugavel.morada AND alugavel.codigo = oferta.codigo AND alugavel.morada = oferta.morada AND edificio.morada = '$morada' GROUP BY edificio.morada , oferta.codigo;";    
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
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
    </body>
</html>
        