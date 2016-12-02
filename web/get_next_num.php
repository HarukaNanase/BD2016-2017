<?php
		try
		{			
			$year = date("Y");
							
			require 'bd_init.php';
			$temp = "SELECT reserva.numero FROM reserva;";
			$numeros = $db->query($temp);
			
			$i = count(numeros);
			$temp_num = $year."-".$i;
			
			require 'bd_init.php';
			$temp = "SELECT reserva.numero FROM reserva WHERE numero='temp_num';";
			$result = $db->query($temp);
			
			while(count($result)==2){
				$i++;
				$temp_num = $year."-".$i;			
				require 'bd_init.php';
				$temp = "SELECT reserva.numero FROM reserva WHERE numero='temp_num';";
				$result = $db->query($temp);
			}
			$numero = $temp_num;
		}
		catch (PDOException $e)
		{
			echo("<p>ERROR: {$e->getMessage()}</p>");
		}
	?>