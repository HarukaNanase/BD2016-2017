<html>
    <body>
    <h3>pagar reserva - sucesso</h3>
		<?php
			try{
				$numero = $_POST['numero'];
				$data = $_POST['data'];
				$metodo = $_POST['metodo'];
				
				require 'bd_init.php';
				$sql="INSERT INTO paga VALUES ('$numero', '$data', '$metodo');";
				require 'run_sql.php';
				require 'bd_init.php';
				$sql="INSERT INTO estado VALUES ('$numero', '$data', 'Paga');";
				require 'run_sql.php';
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>