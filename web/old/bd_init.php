<?php
    try{
        $host = "db.ist.utl.pt";
        $user ="ist176416";
        $password = "qnjp0196";
        $dbname = $user;
    
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->query("start transaction;");
	}
    catch (PDOException $e){
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>