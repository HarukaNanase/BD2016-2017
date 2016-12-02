<?php
	try{
		$year = date("Y");	
		$i=1;
		require 'bd_init.php';
		$temp = "SELECT reserva.numero FROM reserva;";
		$numeros = $db->query($temp);
		foreach($numeros as $row){
			$i++;
		}
		$temp_num = $year."-".$i;
		
		$numeros = $db->query($temp);
		foreach($numeros as $row){
			require 'bd_init.php';
			$temp = "SELECT reserva.numero FROM reserva WHERE numero='$temp_num';";
			$result = $db->query($temp);
			foreach($result as $row){
				
				$i++;
			}
			$temp_num = $year."-".$i;
		}
		$numero = $temp_num;
	}
	catch (PDOException $e)
	{
		echo("<p>ERROR: {$e->getMessage()}</p>");
	}
?>