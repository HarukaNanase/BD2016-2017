<html>
    <body>
    <h3>pagar reserva - parte 2</h3>
		<form action="pagar_reserva_suc.php" method="post">
			<input type="hidden" name="numero" value="<?=$_REQUEST['numero']?>">
			metodo: <input list="metodos" required>
					  <datalist id="metodos">
						<option value="PayPal">
						<option value="Cartao Credito">
					  </datalist> <br>
			data: <input type="date" name="data" min=<?=$_REQUEST['timestamp']?> required><br>
			<input type="submit">
    </body>
</html>