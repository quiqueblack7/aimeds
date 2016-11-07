<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="../images/icon.png">
	<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
  <script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
  <script src="../js/preFunciones.js"></script>
</head>
<?php
include("../php/funciones.php");
$x=-1;
if(isset($_SESSION['idProy'])){
	$idProy = $_SESSION['idProy'];
	$sql = "SELECT * FROM responsable WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) {  ${$var} = $val;	}

	$sql = "SELECT * FROM principal WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) {  ${$var} = $val;	}

	$sql = "SELECT * FROM poblacion WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) {  ${$var} = $val;	}

	$sql = "SELECT * FROM rhumanos WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$rowRH = mysql_num_rows($res);

	$sql = "SELECT * FROM autorizaciones WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$rowAut = mysql_num_rows($res);

	$sql = "SELECT * FROM presupuesto WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$rowPre = mysql_num_rows($res);

	$x=0;



}
else{
	$idProy = 0;
	$sql = "SELECT * FROM responsable WHERE idProyecto = 0";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) { echo ${$var} = $val;	}

	$sql = "SELECT * FROM principal WHERE idProyecto = 0";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) { echo ${$var} = $val;	}

	$sql = "SELECT * FROM poblacion WHERE idProyecto = 0";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) { echo ${$var} = $val;	}

}
?>

<body class='bodyProy'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='../images/logoWhite.png'></a>
	</div>
	<div id='addObjetivo'>
		<div>
			<p id='closeObj'><i class="fa fa-times"></i></p>
			<p id='tit1'>Agregar nuevo objetivo</p>
			<input type='text' id='descObj'>
			<p id='sendObj'>Aceptar</p>
		</div>
	</div>

	<div id='addPersona'>
		<div>
			<p id='closePer'><i class="fa fa-times"></i></p>
			<p id='tit1'>Agregar persona</p>
			<p><input type='text' id='nomRH' class='inPers' placeholder="Escriba el nombre de la persona"></p>
			<p><input type='text' id='carRH' class='inPers' placeholder="Escriba el cargo de la persona"></p>
			<p id='sendPer'>Aceptar</p>
		</div>
	</div>

	<div id='addAuto'>
		<div>
			<p id='closeAuto'><i class="fa fa-times"></i></p>
			<p id='tit1'>Agregar autorización</p>
			<p><input type='text' id='nomAut' class='inPers' placeholder="Describa la autorización que necesita"></p>
			<p id='sendAuto'>Aceptar</p>
		</div>
	</div>

	<div id='addPresu'>
		<div>
			<p id='closePres'><i class="fa fa-times"></i></p>
			<p id='tit1'>Agregar material</p>
			<p><input type='text' id='desP' class='inPers' placeholder="Descripcion"></p>
			<p><input type='text' id='canP' class='inPers' placeholder="Cantidad"></p>
			<p><input type='text' id='preP' class='inPers' placeholder="Precio"></p>
			<p><input type='text' id='lugP' class='inPers' placeholder="Lugar"></p>
			<p id='sendPres'>Aceptar</p>
		</div>
	</div>
	<div id='contProy'>
		<p class='title'>Formulario de propuesta de proyecto</p>
		<section id='fPart1'>
		<p class='subt'>Responsable del proyecto</p>
		<div class='rD1'>
			<input type='text' id='nom' placeholder="Nombre" name='nombre' class='rI1' value='<?php echo $nombre; ?>'>
			<input type='text' id='app' placeholder="Apellido paterno" name='apellidoP' class='rI1' value='<?php echo $apellidoP; ?>'>
			<input type='text' id='apm' placeholder="Apellido materno" name='apellidoM' class='rI1'  value='<?php echo $apellidoM; ?>'>
			<input type='text' id='cor' placeholder="Correo electrónico" name='mail' class='rI1' value='<?php echo $correo; ?>'>
		</div>
		<div class='rD1'>
			<input type='text' id='tel' placeholder="Teléfono" name='tel' class='rI1' value='<?php echo $telefono; ?>'>
			<input type='text' id='car' placeholder="Carrera" name='carrera' class='rI1' value='<?php echo $carrera; ?>'>
			<select name='gradoEst' id='gre' class='rI1'>
				 <option value=0 selected disabled>Grado de estudios</option>
				 <option value='1' <?php if($gradoE==1)echo "selected"; ?> >Nivel medio superior</option>
				 <option value='2' <?php if($gradoE==2)echo "selected"; ?> >Estudiante de Licenciatura</option>
				 <option value='3' <?php if($gradoE==3)echo "selected"; ?> >Licenciado / Licenciada</option>
				 <option value='4' <?php if($gradoE==4)echo "selected"; ?> >Estudiante de Maestría</option>
				 <option value='5' <?php if($gradoE==5)echo "selected"; ?> >Maestro / Maestra</option>
				 <option value='6' <?php if($gradoE==6)echo "selected"; ?> >Estudiante de Doctorado</option>
				 <option value='7' <?php if($gradoE==7)echo "selected"; ?> >Doctor / Doctora</option>
			</select>
			<select name='escuelaP' id='escuelaP' class='rI1'>
				 <option value=0 selected disabled>Escuela/Trabajo procedencia</option>
				 <option <?php if($escuelaP=='UNAM CU') { echo "selected"; $x=1; }  ?>>UNAM CU</option>
				 <option <?php if($escuelaP=='UNAM FESI') { echo "selected"; $x=1; }  ?>>UNAM FESI</option>
				 <option <?php if($escuelaP=='UNAM FESZ') { echo "selected"; $x=1; }  ?>>UNAM FESZ</option>
				 <option <?php if($escuelaP=='IPN ESM') { echo "selected"; $x=1; }  ?>>IPN ESM</option>
				 <option <?php if($escuelaP=='IPN ENMyH') { echo "selected"; $x=1; }  ?>>IPN ENMyH</option>
				 <option <?php if($escuelaP=='IPN ENCB') { echo "selected"; $x=1; }  ?>>IPN ENCB</option>
				 <option <?php if($escuelaP=='IPN CICS') { echo "selected"; $x=1; }  ?>>IPN CICS</option>
				 <option <?php if($escuelaP=='IPN ESEO') { echo "selected"; $x=1; }  ?>>IPN ESEO</option>
				 <option <?php if($escuelaP=='UAM Xochimilco') { echo "selected"; $x=1; }  ?>>UAM Xochimilco</option>
				 <option <?php if($escuelaP=='La salle') { echo "selected"; $x=1; }  ?>>La salle</option>
				 <option <?php if($escuelaP=='Justo Sierra') { echo "selected"; $x=1; }  ?>>Justo Sierra</option>
				 <option <?php if($escuelaP=='West Hill') { echo "selected"; $x=1; }  ?>>West Hill</option>
				 <option <?php if($escuelaP=='UP') { echo "selected"; $x=1; }  ?>>UP</option>
				 <option <?php if($escuelaP=='Escuela Médico Militar') { echo "selected"; $x=1; }  ?>>Escuela Médico Militar</option>
				 <option value="15" <?php if($x==0)  { echo "selected"; }  ?>>Otra</option>
			</select>
		</div>
		<div class='rD3'>
			<input type='text' class='EscP2P' name='escuelaP2' placeholder='Ingresa esc/trab procedencia' id='escP2' value='<?php if($x==0) echo $escuelaP; ?>'>
		</div>
		<div class='rD2'>
			<span id='sQues'>¿Eres miebro de AIMEDS?</span>
			SI <input type='radio' name='miembro' id='mYes' value="1">
			NO <input type='radio' name='miembro' id='mNo' value="0">
			<input type='text' placeholder="Usuario AIMEDS" name='' class='rI2' id='idAIMEDS'>
		</div>
		<div id='Mostrar1'><p id='bMostrar1'>Guardar y continuar</p></div>
	</section>
<section id='fPart2'>

		<p class='subt'>Proyecto</p>
		<div class='test'>
			<p>Nombre del proyecto</p>
			<p><input type="text" id='nomP' placeholder="Nombre llamativo y concreto" class='i1' value="<?php echo $nombreProyecto; ?>"></p>
		</div>
		<div class="test">
			<p>Justificación del proyecto</p>
			<p><textarea id='jus' placeholder="¿Por qué lo quiero hacer?" class="text1"><?php echo $justificacion; ?></textarea></p>
		</div>
		<div class="test dObjM">
			<p>Objetivo (Qué quiero lograr)</p>
			<div id='dObj'>
					<?php  $buttObj = getObjs("$idProy"); ?>
			<a href="#addObj"><p id='addObj'>Agregar Objetivo</p></a>
			</div>
		</div>
		<div class="test">
			<p>Población (A quién va dirigido)</p>
			<div id='poblacion'>
				<div>
					<input type="radio" name='dir1' value="1" id='rEst'>Estudiantes<br>
					<input type="radio" name='dir1' value="2" id='rPro'>Profesionales<br>
					<input type="radio" name='dir1' value="3" id='rTodas'>Ambos<br>
				</div>
				<div>
					<input type="checkbox" name='dir21' id='dirM' <?php if($medicina==1 || $todas==1) echo "checked='checked'" ?>>Medicina<br>
					<input type="checkbox" name='dir22' id='dirE' <?php if($enfermeria==1 || $todas==1) echo "checked='checked'" ?>>Enfermería<br>
					<input type="checkbox" name='dir23' id='dirN' <?php if($nutricion==1 || $todas==1) echo "checked='checked'" ?>>Nutrición<br>
					<input type="checkbox" name='dir24' id='dirB' <?php if($bioquimica==1 || $todas==1) echo "checked='checked'" ?>>Bioquímica<br>
					<input type="checkbox" name='dir25' id='dirOd' <?php if($odonto==1 || $todas==1) echo "checked='checked'" ?>>Odontología<br>
					<input type="checkbox" name='dir26' id='dirOp' <?php if($opto==1 || $todas==1) echo "checked='checked'" ?>>Optometría<br>
					<input type="checkbox" name='dir27' id='dirP' <?php if($psico==1 || $todas==1) echo "checked='checked'" ?>>Psicología<br>
					<input type="checkbox" name='dir28' id='dirAll' <?php if($todas==1 ) echo "checked='checked'" ?>>Todas<br>
					<input type="checkbox" name='dir29' id='dirOt' <?php if($otra==1) echo "checked='checked'" ?>>Otra
					<input type="text" placeholder="Escribe el área de salud" id='dirOtText'><br>

				</div>
				<div class='clearBoth'></div>
			</div>
		</div>

		<div class="test">
			<p>Fecha probable</p>
			<p>
				<input type="date" id='fech1' value="<?php echo $fecha1; ?>">
				<span id='guion'>-</span>
				<input type="date" id='fech2' value="<?php echo $fecha2; ?>"
				<?php if($fecha2!='NULL' && $fecha2 !='0000-00-00' && $fecha2!='') echo "class='vis'"; ?> >
				<a id='chaDate' alt='1'>Cambiar a periodo</a>
			</p>
		</div>
		 <div class="test">
			<p>Lugar probable</p>
			<p><input type="text" placeholder="Dirección del lugar" class='i1' id='lProb' value="<?php echo $lugarP; ?>"></p>
		</div>
		<div class="test">
			<p>Plan de trabajo</p>
			<p><textarea placeholder="Describe el plan de trabajo" class="text1" id='pTrab'><?php echo $planTrabajo; ?></textarea></p>
		</div>
		<div id='Mostrar2'><p id='bMostrar2'>Guardar y continuar</p></div>
</section>
<section id='fPart3'>
	<div class="test">
		<p>Publicidad</p>
		<p><input type="checkbox" id='cPF'>Física <input type="text" id='pubFis' value='<?php echo "$desFisica"; ?>'><br>
			<input type="checkbox" id='cPRS'>Redes sociales <input type="text" id='pubRS' value='<?php echo "$desRedes"; ?>'><br></p>
	</div>
	<hr class='sepProy'>	<hr class='sepProy'>
	<div class="test dObjM">
		<p>Recursos humanos</p>
		<div id='dObj'>
				<?php  $buttRech = getRecH("$idProy"); ?>
		<a href="#addPersona"><p id='addRH'>Agregar persona</p></a>
		</div>
	</div>
	<hr class='sepProy'>
	<div class="test dObjM">
		<p>Autorizaciones</p>
		<div id='dObj'>
				<?php  $buttAut = getAut("$idProy"); ?>
		<a href="#addAuto"><p id='addAut'>Agregar autorización</p></a>
		</div>
	</div>
	<hr class='sepProy'>
	<div class="test dObjM">
		<p>Recursos materiales<br>(Tabla de presupuestos)</p>
		<div id='dObj'>
				<?php  $buttPre = getPre("$idProy"); ?>
		<a href="#addPresu"><p id='addPres'>Agregar material</p></a>
		</div>
	</div>

			<div id='Mostrar2'><p id='bMostrar3'>Guardar y Terminar</p></div>
			<p style=" text-align: center; font-family: bariol; font-size: 18px;">
				NOTA: No es necesario llenar toda la información, puedes terminar tu proyecto mas tarde.
			</p>
	</section>

	</div>


	<iframe id='fFPro'></iframe>

	<?php
		if(isset($_SESSION['idProy'])){
			if($nomP=!'') echo "<script> show2nd(); </script>";
			if($rowRH>0||$rowAut>0||$rowPre>0||$pubFisica!=0||$pubRedes!=0) echo "<script> show3rd(); </script>";
			echo "<script> propOn('$miembro','$idMiembro'); </script>";
			echo "<script> propOn2('$poblacion'); </script>";
			if($x==0) echo "<script> espOtra('$escuelaP'); </script>";
			if($pubFisica!=0){ echo "<script>showFis();</script>"; }
			if($pubRedes!=0){ echo "<script>showRed();</script>"; }
		}
		 echo"<script> moveButt('$buttObj');</script>";
		 echo"<script> moveButt('$buttRech');</script>";
		 echo"<script> moveButt('$buttAut');</script>";
		 echo"<script> moveButt('$buttPre');</script>";
	?>
<script src="../js/funciones.js"></script>
</body>
</html>
