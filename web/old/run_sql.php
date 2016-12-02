<?php
	try{	
		$db->query($sql);
        $db->query("commit;");
		$logfile = fopen(".log", "a");
		$date = "\n[".date("Y-m-d h:i:sa")."] ";
		fwrite($logfile, $date.$sql);
		fclose($logfile);
        $db = null;
		$sql = null;
    }
    catch (PDOException $e){
        $db->query("rollback;");
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>