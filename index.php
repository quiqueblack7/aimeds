<?php
	if(isset($_POST['mnsj'])){ $mnsj = $_POST['mnsj']; }
	else $mnsj = "none";

	if(isset($_GET['error'])){ $error = $_GET['error']; }
	else $error = "none";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AIMEDS A.C.</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="images/icon.png">
	<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
	<script src="js/preFunciones.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container cont1">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><img src='images/logoWhite.png' class='temp'></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right navPers">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#work" class="smoothScroll">NOSOTROS</a></li>
				<li><a href="#about" class="smoothScroll">OBJETIVOS</a></li>
				<li><a href="#team" class="smoothScroll">ÚNETE</a></li>
				<li><a href="#afiliados" class="smoothScroll">AFILIADOS</a></li>
				<li><a href="#portfolio" class="smoothScroll">EVENTOS</a></li>
				<li><a href="#proyectos" class="smoothScroll">PROYECTOS</a></li>
				<li><a href="#pricing" class="smoothScroll">SÍGUENOS</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACTO</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Somos una red de estudiantes y profesionales de la salud</p>
				<a href="#work" class="smoothScroll btn btn-danger">Conócenos</a>
			</div>
		</div>
	</div>
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md- col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">Acerca de nosotros</h1>
					<hr class='hrAdNos'>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp aDNos" data-wow-delay="0.6s">
					<p>La <b>Asociación Internacional de Medicina y Salud A.C.</b> surge con el objetivo de
					fomentar la cooperación multidisciplinaria entre estudiantes y profesionales de
					distintas áreas de la salud para lograr una mejora continua en los servicios
					y hacer frente a los nuevos retos del panorama mundial.</p>
					<br>
					<p>Mediante congresos, cursos, diplomados y diversas actividades buscamos ser un
					puente que conecte la iniciativa de los estudiantes con la experiencia de profesionales
					destacados en todas las ciencias de la salud para fomentar una práctica
					integral que beneficie a la sociedad.</p>
			</div>
		</div>
	</div>
</section>

<section id='video'>
	<div id='contVideo'>
		<iframe   width= '800px';  height= '450px'; src="https://www.youtube.com/embed/uPiR8mSd1NA" frameborder="0" allowfullscreen></iframe>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">Nuestros objetivos</h1>
					<hr class='hrAbout'>
				</div>
			</div>
			<div id='cont3'>
			<div class="wow fadeInUp center" data-wow-delay="0.6s" id='coop'>
				<img src='images/icon1.png' class='imgObj'>
					<h4>Cooperación</h4>
					<hr>
					<p>Establecemos vínculos entre distintas
						áreas enfocadas al cuidado de la salud para
						generar un panorama multidisciplinario que
						beneficie a los pacientes.</p>
			</div>
			<div class="wow fadeInUp center" data-wow-delay="0.6s" id='edu'>
				<img src='images/icon3.png' class='imgObj'>
					<h4>Educación continua</h4>
					<hr>
					<p>A través de diversos proyectos académicos y sociales
						 fomentamos la actualización constante de los profesionales y
					 	 potenciamos la formación académica de los estudiantes
						 que conforman nuestra comunidad.</p>
			</div>
			<div class="wow fadeInUp center" data-wow-delay="0.6s" id='trans'>
				<img src='images/icon2.png' class='imgObj'>
					<h4>Transformación</h4>
					<hr>
					<p>En AIMEDS somos agentes de
						cambio. Nuestra meta es transformar el
						panorama de las ciencias de la salud mediante
						un enfoque multidisciplinario y de cooperación,
						que genere cada vez más y mejores
						servicios de salud al alcance de todos. </p>
			</div>
		</div>
		</div>
	</div>
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">Nuestra comunidad</h1>
					<hr>
					<p>Al afiliarte a <b>AIMEDS</b> formarás parte de nuestra red y tendrás
						acceso preferencial a nuestros eventos y actividades con las que
						podrás potenciar tu desarrollo profesional.</p>
					<p>Si eres estudiante o profesional de algún área realcionada con el cuidado de la
						salud, tú puedes ser parte de nuestra comunidad. Afiliarte es muy sencillo, sólo haz
						clic en el botón de abajo para enterarte de todos los beneficios que obtendrás.</p>
						<a href="beneficios.php" class="btn btn-danger">Únete</a>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- afiliados section -->
<section id='afiliados'>
	<div>
		<h2>Área de miembros</h2>
		<hr>
		<p>Si ya eres parte de nuestra comunidad, <b>accede</b> a tu cuenta:</p>
		<form method="POST" action="php/funciones.php?login=true">
		<div><input type='text' placeholder="Usuario" name='idUsuario' required></div>
		<div><input type='password' placeholder="Contraseña" name='password' required></div>
		<div><input type='submit' value='Entrar' id='bEntrar'></div>
		<?php if($error!='none') {?>
			<p id='mnsjError'>
				<?php
					if($error=='userNotFound'){ echo "Usuario no localizado, inténtalo nuevamente"; }
					if($error=='inactiveUser'){ echo "Usuario desactivado temporalmente, envía un correo a contacto@aimeds.org para cualquier aclaración"; }
					if($error=='wrongUserPass'){ echo "Usuario y/o contraseña incorrectos, inténtalo nuevamente"; }
					echo "<script>colorMsnjError();</script>";
				?>
			</p>
		<?php } ?>
	</form>
	</div>
</section>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">Eventos</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="images/proxEve.jpg" class="img-resqonsive" alt="about img" id='evImg'>
			</div>
			<div class="col-md-6 col-sm-12">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li><a href="#ANT" aria-controls="ANT" role="tab" data-toggle="tab" id='evAnt'>Anteriores</a></li>
					<li class="active"><a href="#PROX" aria-controls="PROX" role="tab" data-toggle="tab" id='evPro'>Próximos</a></li>
				</ul>
				<hr class='hrEventos'>
				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane" id="ANT">
						<p id='ant1'>- Foro moviendo tu salud: "Impulsando agentes de cambio"</p>
					</div>
					<div role="tabpanel" class="tab-pane active" id="PROX">
						<p id='prox2'>- Curso / Taller : "¿Qué hacer en mi primera guardia?"</p>
						<p id='prox3'>- Curso ENARM (Por anunciarse)</p>
						<p id='prox4'>- Curso Dopaje (Por anunciarse)</p>
					</div>
				</div>
			</div>
		</div>
		<div id='divBEv'>
			<a id='btnReg'><p class='btnEv'>Regístrate</p></a>
		</div>
	</div>
</div>

<!-- Seccion ANUNCIOS
<section id="anuncios">
		<div class="container">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">Anuncios</h1>
					<hr>
					<p>Tenemos 30 becas del 100% para el siguiente evento, entérate como
					obtener una.</p>
					<img src='images/prox1.jpg' id='img1A'>
					<a href="eventos.php?Evento=Proximo_1" style="text-decoration: none;"><p id='btn1A'>Ver evento</p></a>
				</div>
			</div>
		</div>
</section>
-->

<!-- proyectos section -->
<section id="proyectos">
	<div class="container">
		<div class="dProy">
			<h1>Proyectos</h1>
			<hr>
			<p>
				En AIMEDS nos preocupamos por apoyar la iniciativa de jóvenes talentos,
				es por eso que en esta sección tendrás la oportunidad de presentar tu
				proyecto y recibir la orientación y apoyo hasta llevarlo a termino.
		</p><br>
		<p>
			Nota: no se darán apoyos económicos y los proyectos serán respaldados
			por AIMEDS, sin dejar de lado el nombre del autor principal y sus colaboradores.
		</p>
		<p class='pBtn'>
		<!--	<a href="proyectos.php" class="btn btn-danger btnP">Continuar</a> -->
		<p  style="font-size: 21px; text-align: center;">Espéralo</p>
		</p>
		</div>
	</div>
</section>

<!-- pricing section -->
<section id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">Síguenos</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-12 col-sm-12">
				<div class="wow bounceIn" data-wow-delay="#0.3s">
					<p>Para mantenerte informado acerca de nuestras actividades y otras noticias
						relacionadas con AIMEDS, sigue nuestras redes sociales.</p>
						<div>
							<a href='https://www.facebook.com/aimeds.ac/'>
								<img src='images/face1.png' class='imgRed'>
							</a>
							<a href='https://twitter.com/AIMEDS_AC?s=08'>
								<img src='images/tweet1.png' class='imgRed'>
							</a>
							<a href='https://www.linkedin.com/company/15145126?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A15145126%2Cidx%3A2-1-2%2CtarId%3A1473297673964%2Ctas%3Aasociacion%20internacional%20de%20medicin'>
								<img src='images/link.png' class='imgRed'>
							</a>
							<a href='https://www.youtube.com/channel/UC5o7Pp6TiSyWpU-THg4X1Eg'>
								<img src='images/youTube.png' class='imgRed'>
							</a>
							<a href='https://www.instagram.com/aimeds_ac/'>
								<img src='images/Insta.png' class='imgRed'>
							</a>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<?php if($mnsj=="mc1"){
						echo "<div class='mnsC' id='mnsC'>Mensaje enviado correctamente</div>";
						echo "<script> hideMsg(); </script>";
						}
					?>
					<h1 class="heading bold">Contacto</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">Habla con nosotros</h2>
				<p>Si tienes dudas o comentarios con respecto a AIMEDS,
					déjanos un mensaje, nosotros te responderemos lo más pronto posible.</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i>Correo electrónico</h3>
					<p>contacto@aimeds.org</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<form action="phpMailer/examples/mailContacto.php" method="POST" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Correo electrónico" name="correo" required>
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Mensaje" rows="7" name="mensaje" required></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" class="form-control" value="Enviar mensaje">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>



<!-- footer section -->
<footer>
	<div class="container">
		<div id='divFoot'>
				<p class='pFoot1'>© AIMEDS 2016</p>
				<p class='pFoot2'>
					<a href="avisoPrivacidad.php?ref=Ggset2352hsdeb54852"  target="_blank">Aviso de privacidad</a> |
					<a href="#home">HOME</a> |
					<a href="#afiliados" class="smoothScroll">Área de afiliados</a></p>

		</div>
	</div>
</footer>



<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
