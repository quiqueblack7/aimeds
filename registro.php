<?php include("php/funciones.php"); ?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body class='bodyFicha'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='images/logoWhite.png'><a>
	</div>
	<div id='contenido'>
    <div class='contReg fReg'>
			<div class='rTittle'>Regístrate para obtener todos los beneficios</div>
      <form id='fReg'>
        <div class='dCont2 dCont1'>
          <div><input type='text' name='nombre' id='nom'><p>Nombre(s)</p></div>
          <div><input type='text' name='apellidoP' id='app'><p>Apellido paterno</p></div>
          <div><input type='text' name='apellidoM' id='apm'><p>Apellido materno</p></div>
        </div>
        <div class='dCont2'>
					<div><input type='date' placeholder="dd/mm/aaaa" name='fechaNac' id='fec'><p>Fecha de nacimiento</p></div>
					<div><select name='sexo' id='sex'>
						 <option value='' selected disabled>Selecciona una opción</option>
						 <option value='Masculino'>Masculino</option>
						 <option value='Femenino'>Femenino</option>
					</select>
					<p>Sexo</p></div>
					<div><input type='email' name='email' id='ema'><p>Correo electrónico</p></div>
        </div>
				<iframe src='frame.php?obPEM=1' id='fPEM' class='fPEM'></iframe>
        <div class='dCont2'>
					<div><input type='text' name='carrera' id='car'><p>Carrera</p></div>
          <div><select name='gradoEst' id='gre'>
             <option value=0 selected disabled>Selecciona una opción</option>
             <option value='1'>Nivel medio superior</option>
             <option value='2'>Estudiante de Licenciatura</option>
             <option value='3'>Licenciado / Licenciada</option>
             <option value='4'>Estudiante de Maestría</option>
             <option value='5'>Maestro / Maestra</option>
             <option value='6'>Estudiante de Doctorado</option>
             <option value='7'>Doctor / Doctora</option>
          </select>
          <p>Grado de estudios</p></div>
          <div><select name='escuelaP' id='escuelaP'>
             <option value=0 selected disabled>Selecciona una opción</option>
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
          <p>Escuela/Trabajo procedencia</p>
          <input type='text' name='escuelaP2' placeholder='Ingresa esc/trab procedencia' id='escP2'></div>
        </div>
				<div class='dCont2'>
					<p class='aPPA'><input type='checkbox' class='chP' id='checkAPPA'>
						He leído y acepto el
						<span id='avP' class='sAPPA'>Aviso de privacidad</span> y
						<span id='poA' class='sAPPA'>Políticas de afiliación</span></p>
				</div>
        <div class='dBotR'><div id='bReg'>Enviar</div></div>
     </form>
   </div>
  </div>
	<iframe id='appa'></iframe>
	<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
  <script src="js/funciones.js"></script>
</body>
</html>
