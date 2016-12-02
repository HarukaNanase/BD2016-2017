<html>
    <body>
    <h3>remove oferta sucesso</h3>
		<?php
			try{	
				$morada = $_REQUEST['morada'];	
				$codigo = $_REQUEST['codigo'];	
				$data_inicio = $_REQUEST['data_inicio'];
				$nif = $_REQUEST['nif'];
				require 'get_next_num.php';
				require 'bd_init.php';
				$sql="INSERT INTO reserva VALUES ('$numero');";
				require 'run_sql.php';
				require 'bd_init.php';
				$sql="INSERT INTO aluga VALUES ('$morada', '$codigo', '$data_inicio', '$nif', '$numero');";
				require 'run_sql.php';
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>