<html>
    <body>
    <h3>Sucesso</h3>
		<?php
			try{
				$type = $_POST['type'];
				$morada = $_POST['morada'];
				$codigo = $_POST['codigo'];
				$codigo_espaco = $_POST['codigo_espaco'];
				if ($type=='edificio'){
					require 'bd_init.php';
					$temp = "SELECT aluga.numero FROM aluga WHERE aluga.morada='$morada';";
					$result = $db->query($temp);
					
					
					require 'bd_init.php';
					$sql = "DELETE FROM fiscaliza WHERE fiscaliza.morada='$morada';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM arrenda WHERE arrenda.morada='$morada';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM aluga WHERE aluga.morada='$morada';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM oferta WHERE oferta.morada='$morada';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM posto WHERE posto.morada='$morada';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM espaco WHERE espaco.morada='$morada';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM alugavel WHERE alugavel.morada='$morada';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM edificio WHERE edificio.morada='$morada';";
					require 'run_sql.php';
					
					foreach ($result as $row){
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
				}
				elseif ($type=='espaco'){
					
					require 'bd_init.php';
					$temp = "SELECT posto.codigo FROM posto WHERE posto.morada='$morada' AND posto.codigo_espaco='$codigo';";
					$list_postos = $db->query($temp);
					
					require 'bd_init.php';
					$temp2 = "SELECT aluga.numero FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
					$list_numero = $db->query($temp);
					
					require 'bd_init.php';
					$sql = "DELETE FROM fiscaliza WHERE fiscaliza.morada='$morada' AND fiscaliza.codigo='$codigo';";
					include 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM arrenda WHERE arrenda.morada='$morada' AND arrenda.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM oferta WHERE oferta.morada='$morada' AND oferta.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM posto WHERE posto.morada='$morada' AND posto.codigo_espaco='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM espaco WHERE espaco.morada='$morada' AND espaco.codigo='$codigo';";	
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM alugavel WHERE alugavel.morada='$morada' AND alugavel.codigo='$codigo';";
					require 'run_sql.php';
					foreach ($list_numero as $row){
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
					
					foreach($list_postos as $row){
						$codigo=$row['codigo'];	
						
						require 'bd_init.php';
						$temp2 = "SELECT aluga.numero FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
						$list_numero = $db->query($temp);
						$sql = "DELETE FROM fiscaliza WHERE fiscaliza.morada='$morada' AND fiscaliza.codigo='$codigo';";
						include 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM arrenda WHERE arrenda.morada='$morada' AND arrenda.codigo='$codigo';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM oferta WHERE oferta.morada='$morada' AND oferta.codigo='$codigo';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM alugavel WHERE alugavel.morada='$morada' AND alugavel.codigo='$codigo';";
						require 'run_sql.php';
						foreach ($list_numero as $row){
							$numero=$row['numero'];	
							require 'bd_init.php';
							$sql = "DELETE FROM estado WHERE estado.numero='$numero';";
							require 'run_sql.php';
							require 'bd_init.php';
							$sql = "DELETE FROM paga WHERE paga.numero='$numero';";
							require 'run_sql.php';
							require 'bd_init.php';
							$sql = "DELETE FROM reserva WHERE reserva.numero='$numero';";
							require 'run_sql.php';					
						}
					}
				}
				else {
					require 'bd_init.php';
					$temp = "SELECT aluga.numero FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
					$result = $db->query($temp);					
					
					require 'bd_init.php';
					$sql = "DELETE FROM fiscaliza WHERE fiscaliza.morada='$morada' AND fiscaliza.codigo='$codigo';";
					include 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM arrenda WHERE arrenda.morada='$morada' AND arrenda.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM oferta WHERE oferta.morada='$morada' AND oferta.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM posto WHERE posto.morada='$morada' AND posto.codigo_espaco='$codigo_espaco' AND posto.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM alugavel WHERE alugavel.morada='$morada' AND alugavel.codigo='$codigo';";
					require 'run_sql.php';
					
					foreach ($result as $row){
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
				}
				
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>