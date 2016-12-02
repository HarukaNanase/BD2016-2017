<html>
    <body>
    <h3>cria oferta - user input</h3>
		<form action="cria_oferta_p5.php" method="post">
			<input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>">
			<input type="hidden" name="codigo" value="<?=$_REQUEST['codigo']?>">			
			data_inicio: <input type="date" name="data_inicio"required><br>
			tarifa: <input type="number" name="tarifa" min="0" step="0.0001" value="0.0001"required><br>
			<input type="submit">
    </body>
</html>