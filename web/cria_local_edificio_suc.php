<html>
    <body>
    <h3>cria local - edificio - sucesso</h3>
		<?php
			try{	
				$morada = $_POST['morada'];
				
				require 'bd_init.php';
				$sql="INSERT INTO edificio VALUES ('$morada');";
				require 'run_sql.php';
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>