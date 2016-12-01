<!DOCTYPE html>
<html>
<title>Projeto BD - 2016/2017 - Grupo 24</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
<div class="w3-display-topleft w3-padding-large w3-xlarge">
    Logo
  </div>
<!-- Header -->
<header class="w3-container w3-red w3-center w3-padding-128">
  <h1 class="w3-margin w3-jumbo">
  <?php 
  
  echo "Are you sure you want to remove {$_REQUEST['type']}>{$_REQUEST['morada']}>{$_REQUEST['codigo_espaco']}>{$_REQUEST['codigo']}";?>
  </h1>
  <p class="w3-xlarge">This will remove all conected cenas</p>
  
	<form action="remove_success.php" method="post">
	  <p><input type="hidden" name="type" value="<?=$_REQUEST['type']?>"></p>
	  <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"></p>
	  <p><input type="hidden" name="codigo" value="<?=$_REQUEST['codigo']?>"></p>
	  <p><input type="hidden" name="codigo_espaco" value="<?=$_REQUEST['codigo_espaco']?>"></p>
	  <p><input class="w3-btn w3-padding-16 w3-large w3-margin-top" type="submit" value="SIM"></p>
	</form>
</header>

</body>
</html>