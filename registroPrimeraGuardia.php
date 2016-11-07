<?php
	include("php/funciones.php");
	if(isset($_GET['error'])){ $error = 1;	}
	else $error = 0;
?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
	<script src="js/preFunciones.js"></script>
</head>
<body class='bodyFicha'>
  <div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='images/logoWhite.png'></a>
	</div>
  <div id="contFormD">
		<p id='tiregPG2'>Curso/Taller: ¿Qué hacer en mi primera guardia?</p>
		<p style="
			font-family: bariol;
	    text-align: center;
	    font-size: 18px;
	    margin: 9px 0 0;
	    font-style: italic;
	    letter-spacing: 1px;
			text-decoration: underline;
		">
			Elige una opción
		</p>
    <div id='opRegPG'>
      <p id='btnReg1'>Registro para afiliados<br>$250.00</p>
      <p id='btnReg2'>Registro para NO afiliados<br>$400.00</p>
      <!--<p id='btnReg3'>Afiliación <i class="fa fa-plus prom"></i> registro<br>$450.00</p>-->
    </div>

    <div id='divReg1'>
      <div class='dCont2PG'>
				<div><p>Ingresa tu usuario AIMEDS:</p></div>
      	<div><input type='text' id='idUsuario'></div>
      	<div></div>
			</div>
			<div class='dCont2PG'>
				<div><p>Ingresa el semestre en el que te encuentras</p></div>
				<div><input type="text" id='sem'></div>
				<div>	</div>
			</div>
			<div class='dCont2PG'>
				<div><p>¿Padece alguna enfermedad?</p></div>
				<div>
					<span>SI</span><input type="radio" id='enfS' name='enf' class='radioPG'>
					<span>NO</span><input type="radio" id='enfN' name='enf' class='radioPG'>
				</div>
				<div><input type="text" id='enf2' placeholder="Indique la(s) enfermedad(es)"></div>
			</div>
			<div class='dCont2PG'>
				<div><p>¿Toma algún medicamento?</p></div>
				<div>
					<span>SI</span><input type="radio" id='medS' name='med' class='radioPG'>
					<span>NO</span><input type="radio" id='medN' name='med' class='radioPG'>
				</div>
				<div><input type="text" id='med2' placeholder="Indique el medicamento"></div>
			</div>
			<div class='dCont2PG'>
				<div><p>¿Tiene alergias?</p></div>
				<div>
					<span>SI</span><input type="radio" id='algS' name='alg' class='radioPG'>
					<span>NO</span><input type="radio" id='algN' name='alg' class='radioPG'>
				</div>
				<div><input type="text" id='alg2' placeholder="Indique la(s) alergia(s)"></div>
			</div>
			<div class='dCont2PG'>
				<div><p>Contacto de emergencia</p></div>
				<div><input type="text" id='cem'><p>Nombre completo</p></div>
				<div><input type="text" id='tem'><p>Telefono</p></div>
			</div>

			<div id='clearBoth'></div>

			<p style="width: 100%; text-align: center; margin: 55px 0 0;">
				<input type="button" value='Enviar' id='btnSub1' class="btnSub">
			</p>

    </div>


  <div id='divReg2'>
  <div class='dCont2PG dCont1'>
    <div><input type='text' name='nombre' id='nom'><p>Nombre(s)</p></div>
    <div><input type='text' name='apellidoP' id='app'><p>Apellido paterno</p></div>
    <div><input type='text' name='apellidoM' id='apm'><p>Apellido materno</p></div>
  </div>
  <div class='dCont2PG'>
    <div><input type='date' placeholder="dd/mm/aaaa" name='fechaNac' id='fec'><p>Fecha de nacimiento</p></div>
    <div><select name='sexo' id='sex'>
       <option value='0' selected disabled>Selecciona una opción</option>
       <option value='Masculino'>Masculino</option>
       <option value='Femenino'>Femenino</option>
    </select>
    <p>Sexo</p></div>
    <div><input type='email' name='email' id='ema'><p>Correo electrónico</p></div>
  </div>
  <div class='dCont2PG'>
    <div><input type='text' name='carrera' id='car'><p>Carrera</p></div>
    <div><select name='gradoEst' id='gre'>
       <option value='' selected disabled>Selecciona una opción</option>
       <option value='1'>Nivel medio superior</option>
       <option value='2'>Estudiante de Licenciatura</option>
       <option value='3'>Licenciado / Licenciada</option>
       <option value='4'>Estudiante de Maestría</option>
       <option value='5'>Maestro / Maestra</option>
       <option value='6'>Estudiante de Doctorado</option>
       <option value='7'>Doctor / Doctora</option>
    </select>
    <p>Grado de estudios</p></div>
		<div><input type='text' id='sem2'>
		<p>Semestre</p></div>
	  </div>
	<div class='dCont2PG'>
		<div><select name='escuelaP' id='escuelaP'>
       <option value='' selected disabled>Selecciona una opción</option>
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
    </div>
		<div><input type='text' name='escuelaP2' placeholder='Ingresa esc/trab procedencia' id='escP2'></div>
		<div></div>
	</div>
	<div class='dCont2PG'>
		<div><p>¿Padece alguna enfermedad?</p></div>
		<div>
			<span>SI</span><input type="radio" id='enf2S' name='enf' class='radioPG'>
			<span>NO</span><input type="radio" id='enf2N' name='enf' class='radioPG'>
		</div>
		<div><input type="text" id='enf22' placeholder="Indique la(s) enfermedad(es)"></div>
	</div>
	<div class='dCont2PG'>
		<div><p>¿Toma algún medicamento?</p></div>
		<div>
			<span>SI</span><input type="radio" id='med2S' name='med' class='radioPG'>
			<span>NO</span><input type="radio" id='med2N' name='med' class='radioPG'>
		</div>
		<div><input type="text" id='med22' placeholder="Indique el medicamento"></div>
	</div>
	<div class='dCont2PG'>
		<div><p>¿Tiene alergias?</p></div>
		<div>
			<span>SI</span><input type="radio" id='alg2S' name='alg' class='radioPG'>
			<span>NO</span><input type="radio" id='alg2N' name='alg' class='radioPG'>
		</div>
		<div><input type="text" id='alg22' placeholder="Indique la(s) alergia(s)"></div>
	</div>
	<div class='dCont2PG'>
		<div><p>Contacto de emergencia</p></div>
		<div><input type="text" id='cem2'><p>Nombre completo</p></div>
		<div><input type="text" id='tem2'><p>Telefono</p></div>
	</div>
	<div id='clearBoth'></div>
	<p style="width: 100%; text-align: center; margin: 45px 0 0;">
		<input type='button' value='Enviar' id='btnSub2' class="btnSub">
	</p>
  </div>

	<!--
  <div id='divReg3'>
      <div class='dCont2PG dCont1'>
        <div><input type='text' name='nombre' id='nom3'><p>Nombre(s)</p></div>
        <div><input type='text' name='apellidoP' id='app3'><p>Apellido paterno</p></div>
        <div><input type='text' name='apellidoM' id='apm3'><p>Apellido materno</p></div>
      </div>
      <div class='dCont2PG'>
        <div><input type='date' placeholder="dd/mm/aaaa" name='fechaNac' id='fec3'><p>Fecha de nacimiento</p></div>
        <div><select name='sexo' id='sex3'>
           <option value='' selected disabled>Selecciona una opción</option>
           <option value='Masculino'>Masculino</option>
           <option value='Femenino'>Femenino</option>
        </select>
        <p>Sexo</p></div>
        <div><input type='email' name='email' id='ema3'><p>Correo electrónico</p></div>
      </div>

      <iframe src='frame.php?obPEM=1' id='fPEM' class='fPEM'></iframe>
      <div class='dCont2PG'>
        <div><input type='text' name='carrera' id='car3'><p>Carrera</p></div>
        <div><select name='gradoEst' id='gre3'>
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
        <div><select name='escuelaP' id='escuelaP3'>
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
        <input type='text' name='escuelaP2' placeholder='Ingresa esc/trab procedencia' id='escP23'></div>
      </div>
      <div class='dCont2PG'>
        <p class='aPPA'><input type='checkbox' class='chP' id='checkAPPA'>
          He leído y acepto el
          <span id='avP' class='sAPPA'>Aviso de privacidad</span> y
          <span id='poA' class='sAPPA'>Políticas de afiliación</span></p>

      </div>
			<p style="width: 100%; text-align: center; margin: 10px 0 0;">
				<input type='button' value='Enviar' id='btnSub3' class="btnSub">
			</p>
  </div>
-->


	<?php if($error==1) { ?>
		<div id='errPG'>
			Hubo un error al procesar tu solicitud, intentalo nuevamente.
			<br>Si el problema persiste, comunícate con nosotros enviando un correo a
			contacto@aimeds.org <br>Disculpa las molestias.
		</div>
	<?php } ?>

	<iframe id='appa'></iframe>
  </div>
  <script src="js/funciones.js"></script>
	<script> changeBody(1); </script>
</body>
</html>
