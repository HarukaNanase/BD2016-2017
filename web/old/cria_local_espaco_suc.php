<html>
    <body>
    <h3>cria local - espaco - sucesso</h3>
		<?php
			try{
				$morada = $_POST['morada'];
				$codigo = $_POST['codigo'];
				$foto = $_POST['foto'];
				
				require 'bd_init.php';
				$sql="INSERT INTO alugavel VALUES ('$morada', '$codigo', '$foto');";
				require 'run_sql.php';
				require 'bd_init.php';
				$sql="INSERT INTO espaco VALUES ('$morada', '$codigo');";
				require 'run_sql.php';
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>