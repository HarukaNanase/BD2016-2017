<html>
    <body>
    <h3>cria local - posto - sucesso</h3>
		<?php
			try{
				$morada = $_POST['morada'];
				$codigo = $_POST['codigo'];
				$codigo_espaco = $_POST['codigo_espaco'];
				$foto = $_POST['foto'];
				
				require 'bd_init.php';
				$sql="INSERT INTO alugavel VALUES ('$morada', '$codigo', '$foto');";
				require 'run_sql.php';
				require 'bd_init.php';
				$sql="INSERT INTO posto VALUES ('$morada', '$codigo', '$codigo_espaco');";
				require 'run_sql.php';
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>