<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Alejandro Marin - Web Site</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="<?php echo base_url(); ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
	<div class="nav-wrapper container">
		<a id="logo-container" href="#" class="brand-logo">Alejandro Marin</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="">Inicio</a></li>
		</ul>

		<ul id="nav-mobile" class="side-nav">
			<li><a href="index.php/portafolio">Portafolio</a></li>
		</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
</nav>

<div id="index-banner" class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<br><br>
			<h1 class="header center teal-text text-lighten-2">Alejandro Marin</h1>
			<div class="row center">
				<h5 class="header col s12 light">"Somos arquitectos de nuestro propio destino"</h5>
				<h6 class="header col s12 light">Albert Einstein.</h6>
			</div>
			<div class="row center">
				<a href="doc/curriculum.pdf" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Curriculum Vitae</a>
			</div>
			<br><br>

		</div>
	</div>
	<div class="parallax"><img src="img/b1.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
	<div class="section">

		<!--   Icon Section   -->
		<div class="row">
			<h3 class="header center teal-text text-lighten-2">Fortalezas</h3>
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">smartphone</i></h2>
					<h5 class="center">Desarrollo Móvil</h5>

					<p class="light" style="text-align: justify">
						Más de 1 año de experiencia desarrollando aplicaciones móviles para Android Nativas y 6 meses de experiencia desarrollando aplicaciones móviles híbridas con Ionic Framework que integra AngularJS y Cordova para Android y iOs.
					</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">language</i></h2>
					<h5 class="center">Desarrollo Web</h5>

					<p class="light">Más de 6 meses de experiencia desarrollando aplicativos web, usando framework de css y usando un framework de php llamado codeigniter.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">settings</i></h2>
					<h5 class="center">Otros Lenguajes </h5>

					<p class="light">Más de 2 años con experiencia en desarrollo en lenguajes como C++, Java, C, PHP, JavaScript, HTML5 y hojas de estilos CSS3.</p>
				</div>
			</div>
		</div>

	</div>
</div>


<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
				<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
			</div>
		</div>
	</div>
	<div class="parallax"><img src="img/b2.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
	<div class="section">

		<div class="row">
			<div class="col s12 center">
				<h3><i class="mdi-content-send brown-text"></i></h3>
				<h4>David Alejandro Marin Alzate</h4>
				<h6>Ingeniero de Sistemas en Proceso de Formacion</h6>
				<p class="left-align light">Soy una persona muy capaz de cumplir metas, auto-didacta, apasionado por mi carrera.
											Soy una persona alegre muy servicial, humilde y confiable. Toda mi infancia viví en
											un pueblo del Oriente Antioqueño muy cerca de Medellín, me siento orgulloso  de decir
											que soy Sanvicentino.
				</p>
			</div>
		</div>

	</div>
</div>


<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
				<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
			</div>
		</div>
	</div>
	<div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
</div>

<footer class="page-footer teal">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Company Bio</h5>
				<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Settings</h5>
				<ul>
					<li><a class="white-text" href="#!">Link 1</a></li>
					<li><a class="white-text" href="#!">Link 2</a></li>
					<li><a class="white-text" href="#!">Link 3</a></li>
					<li><a class="white-text" href="#!">Link 4</a></li>
				</ul>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Connect</h5>
				<ul>
					<li><a class="white-text" href="#!">Link 1</a></li>
					<li><a class="white-text" href="#!">Link 2</a></li>
					<li><a class="white-text" href="#!">Link 3</a></li>
					<li><a class="white-text" href="#!">Link 4</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
		</div>
	</div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
