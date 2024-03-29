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
							<div class="w-container">
								<div class="w-row">
									<div class="w-col w-col-6"></div>
									<div class="w-clearfix w-col w-col-3">
										<div class="sign-in signup">
											<div class="w-clearfix w-form">
												<?php
													if ($_POST['type'] == "edificio") {
														echo "<form class='form signup' action='rem_loc_edi.php' data-name='remove_local' id='wf-form-remove_local' method='post' name='wf-form-remove_local'>";
													} else {
														echo "<form class='form signup' action='rem_loc_p3.php' data-name='remove_local' id='wf-form-remove_local' method='post' name='wf-form-remove_local'>";
													}
												?>
												<form class="form signup" action="old/remove_espaco.php" data-name="remove_local" id="wf-form-remove_local" method="post" name="wf-form-remove_local">
													<select class="text-field w-select" data-name="tipo" id="tipo" name="type" readonly><option value="<?=$_POST['type']?>"><?=$_POST['type']?></option></select>
													<select class="text-field w-select" data-name="morada" id="morada" name="morada">
														<optgroup label="Edificios Existentes">
														<?php
															$type = $_POST['type'];
															require 'bd_init.php';
															$sql    = "SELECT edificio.morada FROM edificio;";
															$result = $db->query($sql);
															foreach ($result as $row) {													
																echo "<option value = '{$row['morada']}'>{$row['morada']}</option>";														
														}?>
														</optgroup>
													</select>
													<input class="submit w-button" data-wait="Please wait..." type="submit" value="Continue">
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
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