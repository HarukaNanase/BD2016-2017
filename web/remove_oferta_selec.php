<html>
    <body>
    <h3>remove oferta sucesso</h3>
		<?php
			try{	
				$morada = $_REQUEST['morada'];	
				$codigo = $_REQUEST['codigo'];	
				$data_inicio = $_REQUEST['data_inicio'];				
				require 'bd_init.php';
				$temp = "SELECT aluga.numero FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo' AND aluga.data_inicio='$data_inicio';";
				$numeros = $db->query($temp);
				require 'bd_init.php';
				$sql = "DELETE FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo' AND aluga.data_inicio='$data_inicio';";
				require 'run_sql.php';
				require 'bd_init.php';
				$sql = "DELETE FROM oferta WHERE oferta.morada='$morada' AND oferta.codigo='$codigo' AND oferta.data_inicio='$data_inicio';";
				require 'run_sql.php';
				foreach ($numeros as $row){
					require 'bd_init.php';
					$sql = "DELETE FROM estado WHERE estado.numero='{$row['numero']}';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM paga WHERE paga.numero='{$row['numero']}';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM reserva WHERE reserva.numero='{$row['numero']}';";
					require 'run_sql.php';						
				}
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>