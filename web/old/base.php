<html>
    <body>
    <h3>HOME</h3>
		<?php
			try{		
				require 'bd_init.php';
				// v v CODE HERE v v 
				
				// ^ ^ CODE HERE ^ ^
				require 'run_sql.php';
				echo("<td><a href=\"home.php\">HOME</a></td>\n");
			}
			catch (PDOException $e){
				echo("<p>ERROR: {$e->getMessage()}</p>");
			}
		?>
    </body>
</html>