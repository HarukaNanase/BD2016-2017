<html>
    <body>
    <h3>Cria Oferta - Sucesso</h3>
		<?php
			try{
				$morada = $_POST['morada'];
				$codigo = $_POST['codigo'];
				$data_inicio = $_POST['data_inicio'];
				$data_fim = $_POST['data_fim'];
				$tarifa = $_POST['tarifa'];
				
				require 'bd_init.php';
				$sql="INSERT INTO oferta VALUES ('$morada', '$codigo', '$data_inicio', '$data_fim', $tarifa);";
				require 'run_sql.php';

				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>