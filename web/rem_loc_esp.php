<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Projecto de BD - 2016/2017 - Grupo 24</title>
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <link href="resources/projbd.css" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js">
		</script>
		<script type="text/javascript">WebFont.load({
				 google: {
				   families: ["Montserrat:400,700","Vollkorn:400,400italic,700,700italic","Source Sans Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic"]
				 }
				 });
			  </script>
		<script src="https://daks2k3a4ib2z.cloudfront.net/0globals/modernizr-2.7.1.js" type="text/javascript">
		</script>
      <link href="resouces/favicon.ico" rel="shortcut icon">
      <link href="resouces/favicon.ico" rel="apple-touch-icon">
      <style>
         .spinner {
         margin: 100px auto;
         width: 50px;
         height: 30px;
         text-align: center;
         font-size: 10px;
         }
         .spinner > div {
         background-color: #a9a9a9;
         height: 100%;
         width: 6px;
         display: inline-block;
         -webkit-animation: stretchdelay 1.2s infinite ease-in-out;
         animation: stretchdelay 1.2s infinite ease-in-out;
         }
         .spinner .rect2 {
         -webkit-animation-delay: -1.1s;
         animation-delay: -1.1s;
         }
         .spinner .rect3 {
         -webkit-animation-delay: -1.0s;
         animation-delay: -1.0s;
         }
         .spinner .rect4 {
         -webkit-animation-delay: -0.9s;
         animation-delay: -0.9s;
         }
         .spinner .rect5 {
         -webkit-animation-delay: -0.8s;
         animation-delay: -0.8s;
         }
         @-webkit-keyframes stretchdelay {
         0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
         20% { -webkit-transform: scaleY(1.0) }
         }
         @keyframes stretchdelay {
         0%, 40%, 100% { 
         transform: scaleY(0.4);
         -webkit-transform: scaleY(0.4);
         }  20% { 
         transform: scaleY(1.0);
         -webkit-transform: scaleY(1.0);
         }
         }
      </style>
   </head>
   <body>
      <div class="preloader" data-ix="preloader-fade-out">
         <div class="w-embed">
            <div class="spinner">
               <div class="rect1"></div>
               <div class="rect2"></div>
               <div class="rect3"></div>
               <div class="rect4"></div>
               <div class="rect5"></div>
            </div>
         </div>
      </div>
		<div class="navbar w-nav" data-animation="default" data-collapse="medium" data-doc-height="1" data-duration="600" data-easing="ease-in-out">
			<div class="nav-container w-container">
				<a class="brand w-nav-brand" href="#head">
					<img class="brand-image w-hidden-medium w-hidden-small w-hidden-tiny" src="resources/logo.png" width="134">
				</a>
				<nav class="nav-menu w-nav-menu" role="navigation">
					<img class="mobile-logo w-hidden-main" src="resouces/logo.png" width="100">
						<a class="nav-link w-nav-link" href="old/procurar_p1.php">PROCURAR</a>
						<div class="dropdown w-dropdown" data-delay="0" data-hover="1">
							<div class="nav-link static w-dropdown-toggle">
								<div>Locais</div>
							</div>
							<nav class="dropdown w-dropdown-list">
								<a class="nav-link w-dropdown-link" href="old/cria_local_p1.php">inserir</a>
								<a class="nav-link w-dropdown-link" href="rem_loc_p1.html">remover</a>
							</nav>
						</div>
						<div class="dropdown w-dropdown" data-delay="0" data-hover="1">
							<div class="nav-link static w-dropdown-toggle">
								<div>Ofertas</div>
							</div>
							<nav class="dropdown w-dropdown-list">
								<a class="nav-link w-dropdown-link" href="old/cria_oferta_p1.php">Criar</a>
								<a class="nav-link w-dropdown-link" href="old/remove_oferta.php">Remover</a>
							</nav>
						</div>
						<div class="dropdown w-dropdown" data-delay="0" data-hover="1">
							<div class="nav-link static w-dropdown-toggle">
								<div>Reservas</div>
							</div>
							<nav class="dropdown w-dropdown-list">
								<a class="nav-link w-dropdown-link" href="old/cria_reserva_p1.php">Criar</a>
								<a class="nav-link w-dropdown-link" href="old/pagar_reserva_p1">Pagar</a>
							</nav>
						</div>
						<a class="nav-link w-nav-link" href="http://www.google.com">Sobre nós</a>
					</nav>
					<div class="menu-button w-nav-button">
						<div class="nav-icon w-icon-nav-menu">
						</div>
					</div>
				</div>
			</div>
		<header class="header" data-ix="page-load-fade-in" id="head">
			<div class="slider w-slider" data-animation="cross" data-duration="600" data-hide-arrows="1" data-infinite="1">
				<div class="mask w-slider-mask">
					<div class="slide-1 w-slide">
						<div class="slide-container">
							
								
						<?
							try{
							$morada = $_POST['morada'];
							$codigo = $_POST['codigo'];
							require 'bd_init.php';
					$temp = "SELECT posto.codigo FROM posto WHERE posto.morada='$morada' AND posto.codigo_espaco='$codigo';";
					$list_postos = $db->query($temp);
					
					require 'bd_init.php';
					$temp2 = "SELECT aluga.numero FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
					$list_numero = $db->query($temp);
					
					require 'bd_init.php';
					$sql = "DELETE FROM fiscaliza WHERE fiscaliza.morada='$morada' AND fiscaliza.codigo='$codigo';";
					include 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM arrenda WHERE arrenda.morada='$morada' AND arrenda.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM oferta WHERE oferta.morada='$morada' AND oferta.codigo='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM posto WHERE posto.morada='$morada' AND posto.codigo_espaco='$codigo';";
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM espaco WHERE espaco.morada='$morada' AND espaco.codigo='$codigo';";	
					require 'run_sql.php';
					require 'bd_init.php';
					$sql = "DELETE FROM alugavel WHERE alugavel.morada='$morada' AND alugavel.codigo='$codigo';";
					require 'run_sql.php';
					foreach ($list_numero as $row){
						require 'bd_init.php';
						$sql = "DELETE FROM estado WHERE estado.numero='{$row['numero']}';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM paga WHERE paga.numero='{$row['numero']}';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM reserva WHERE reserva.numero='{$row['numero']}';";
						require 'run_sql.php';						
					}
					
					foreach($list_postos as $row){
						$codigo=$row['codigo'];	
						
						require 'bd_init.php';
						$temp2 = "SELECT aluga.numero FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
						$list_numero = $db->query($temp);
						$sql = "DELETE FROM fiscaliza WHERE fiscaliza.morada='$morada' AND fiscaliza.codigo='$codigo';";
						include 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM arrenda WHERE arrenda.morada='$morada' AND arrenda.codigo='$codigo';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM aluga WHERE aluga.morada='$morada' AND aluga.codigo='$codigo';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM oferta WHERE oferta.morada='$morada' AND oferta.codigo='$codigo';";
						require 'run_sql.php';
						require 'bd_init.php';
						$sql = "DELETE FROM alugavel WHERE alugavel.morada='$morada' AND alugavel.codigo='$codigo';";
						require 'run_sql.php';
						foreach ($list_numero as $row){
							$numero=$row['numero'];	
							require 'bd_init.php';
							$sql = "DELETE FROM estado WHERE estado.numero='$numero';";
							require 'run_sql.php';
							require 'bd_init.php';
							$sql = "DELETE FROM paga WHERE paga.numero='$numero';";
							require 'run_sql.php';
							require 'bd_init.php';
							$sql = "DELETE FROM reserva WHERE reserva.numero='$numero';";
							require 'run_sql.php';					
						}
					}
						}
							catch (PDOException $e){
								echo("<p>ERROR: {$e->getMessage()}</p>");
							}
							?>
							<h1>Espaco<br>Removido com sucesso</h1>
							<h4><? echo "Endereco: > {$_POST['codigo']} < @ '{$_POST['morada']}'";?></h4>
							
							
						</div>
					</div>
				</div>
				<div class="left-arrow w-hidden-medium w-hidden-small w-hidden-tiny w-slider-arrow-left">
					<div class="left-icon w-icon-slider-left">
					</div>
				</div>
				<div class="right-arrow w-hidden-medium w-hidden-small w-hidden-tiny w-slider-arrow-right">
					<div class="right-icon w-icon-slider-right">
					</div>
				</div>
				<div class="slide-nav w-round w-slider-nav">
			</div>
		</div>
			  </header>
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript">
</script>
      <script src="https://daks2k3a4ib2z.cloudfront.net/5840eb2934f6093632aa9820/js/webflow.20dc3333c.js" type="text/javascript">
</script>
      <!--[if lte IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js">
</script>
<![endif]-->
   </body>
</html>