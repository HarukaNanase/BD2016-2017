<html>
    <body>
    <h3>cria oferta - user input 2</h3>
		<form action="cria_oferta_p6.php" method="post">
			<input type="hidden" name="morada" value="<?=$_POST['morada']?>">
			<input type="hidden" name="codigo" value="<?=$_POST['codigo']?>">
			<input type="hidden" name="data_inicio" value="<?=$_POST['data_inicio']?>">
			<input type="hidden" name="tarifa" value="<?=$_POST['tarifa']?>">
			data_fim: <input type="date" name="data_fim" min=<?=$_POST['data_inicio']?>><br>
			<input type="submit">
    </body>
</html>