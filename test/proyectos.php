<?php include("php/funciones.php"); ?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
  <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
  <script src="js/preFunciones.js"></script>
</head>
<body class='bodyProy'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='images/logoWhite.png'><a>
	</div>
	<div id='contProy'>
		<p class='title'>Formulario de propuesta de proyecto</p>

		<p class='subt'>Responsable del proyecto</p>
		<div class='rD1'>
			<input type='text' placeholder="Nombre completo" name='nombre' class='rI1'>
			<input type='text' placeholder="Correo electrónico" name='mail' class='rI1'>
			<input type='text' placeholder="Teléfono" name='tel' class='rI1'>
			<input type='text' placeholder="Carrera" name='carrera' class='rI1'>
		</div>
		<div class='rD2'>
			<select name='gradoEst' id='gre' class='rI2'>
				 <option value=0 selected disabled>Grado de estudios</option>
				 <option value='1'>Nivel medio superior</option>
				 <option value='2'>Estudiante de Licenciatura</option>
				 <option value='3'>Licenciado / Licenciada</option>
				 <option value='4'>Estudiante de Maestría</option>
				 <option value='5'>Maestro / Maestra</option>
				 <option value='6'>Estudiante de Doctorado</option>
				 <option value='7'>Doctor / Doctora</option>
			</select>
			<select name='escuelaP' id='escuelaP' class='rI2'>
				 <option value=0 selected disabled>Escuela/Trabajo procedencia</option>
				 <option value='1'>UNAM CU</option>
				 <option value='2'>UNAM FESI</option>
				 <option value='3'>UNAM FESZ</option>
				 <option value='4'>IPN ESM</option>
				 <option value='5'>IPN ENMyH</option>
				 <option value='6'>IPN ENCB</option>
				 <option value='7'>IPN CICS</option>
				 <option value='8'>IPN ESEO</option>
				 <option value='9'>UAM Xochimilco</option>
				 <option value='10'>La salle</option>
				 <option value='11'>Justo Sierra</option>
				 <option value='12'>West Hill</option>
				 <option value='13'>UP</option>
				 <option value='14'>Escuela Médico Militar</option>
				 <option value='15'>Otra</option>
			</select>
			<input type='text' placeholder="Usuario AIMEDS" name='' class='rI2'>
		</div>

		<p class='subt'>Proyecto</p>
		<div class='test'>
			<p>Nombre del proyecto</p>
			<p><input type="text" placeholder="Nombre del proyecto" class='i1'></p>
		</div>
		<div class="test">
			<p>Justificación del proyecto</p>
			<p><textarea placeholder="Justificación del proyecto" class="text1"></textarea></p>
		</div>
		<div class="test">
			<p>Objetivo</p>
			<p><textarea placeholder="Meta o propósito que se debe lograr" class="text1"></textarea></p>
		</div>
		<div class="test">
			<p>Población (A quien va dirgido)</p>
			<div id='poblacion'>
				<div>
					<input type="radio">Estudiantes<br>
					<input type="radio">Profesionales<br>
					<input type="radio">Ambos<br>
				</div>
				<div>
					<select>
			 			<option value=0 selected disabled>Área de la salud</option>
			 			<option value='1'>Medicina</option>
			 			<option value='2'>Nutrición</option>
		 			</select>
				</div>
				<div id='clearBoth'></div>
			</div>
		</div>

		<div class="test">
			<p>Fecha probable</p>
			<p><input type="date"></p>
		</div>
		<div class="test">
			<p>Duración</p>
			<p><input type="text" placeholder="duracion" class='i1'></p>
		</div>
		<div class="test">
			<p>Lugar probable</p>
			<p><input type="text" placeholder="Lugar probable" class='i1'></p>
		</div>
		<div class="test">
			<p>Plan de trabajo</p>
			<p><textarea placeholder="Describe el plan de trabajo" class="text1"></textarea></p>
		</div>
		<div class="test">
			<p>Recursos humanos</p>
			<p><input type="text" placeholder="Organización" class='i2'>
				<input type="text" placeholder="Presentación" class='i2'></p>
		</div>
		<div class="test">
			<p>Recursos materiales</p>
			<p><input type="text" placeholder="Organización" class='i2'>
				<input type="text" placeholder="Presentación" class='i2'></p>
		</div>
		<div class="test">
			<p>Tabla de presupuestos</p>
			<p><input type="text" placeholder="¿¿¿????" class='i1'></p>
		</div>
		<div class="test">
			<p>Autorizaciones</p>
			<p><input type="text"placeholder="Autorizaciones" class='i1'></p>
		</div>
		<div class="test">
			<p>Publicidad</p>
			<p><input type="radio">Física<br>
				<input type="radio">Redes sociales<br></p>
		</div>
		<div id='clearBoth'></div>
	</div>
<script src="js/funciones.js"></script>
</body>
</html>
