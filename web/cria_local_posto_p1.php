<html>
    <body>
    <h3>cria local - posto - parte 1</h3>
		<form action="cria_local_posto_suc.php" method="post">
			<input type="hidden" name="morada" value="<?=$_POST['morada']?>">
			<input type="hidden" name="codigo_espaco" value="<?=$_POST['codigo_espaco']?>">
			codigo: <input type="text" name="codigo" maxlength="10" required><br>
			foto: <input type="url" name="foto" required><br>
			<input type="submit">
    </body>
</html>