<?php include("php/funciones.php"); ?>
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
<div class='menuFicha2'>
	<a href='../'><img id='logoFicha' src='images/logoWhite.png'><a>
</div>
<div id='subtitPG'>Relación de registros del curso/taller ¿Qué hacer en mi primera guardia</div>
<?php
	$sql = "SELECT * FROM primeraguardia WHERE status = 1 ORDER BY tipo,numero";
	$res = query($sql);
	$cont = 1; $lim = 6;
	while($cam=mysql_fetch_assoc($res)){
		foreach ($cam as $var => $val) { ${$var} = $val;}
		$f = date_format(date_create("$fechaN"),"d/m/Y");
		if($gradoE==1) $graE = "Estudiante de nivel medio superior";
		if($gradoE==2) $graE = "Estudiante de Licenciatura";
		if($gradoE==3) $graE = "Licenciado / Licenciada";
		if($gradoE==4) $graE = "Estudiante de Maestría";
		if($gradoE==5) $graE = "Maestro / Maestra";
		if($gradoE==6) $graE = "Estudiante de Doctorado";
		if($gradoE==7) $graE = "Doctor / Doctora";
		echo "
		<div class='contPG "; if($idUsuario=='AIMEDSPG9')echo "redC"; echo"'>
			<div class='thDiv "; if($idUsuario=='AIMEDSPG9')echo "redC"; echo "'>
				<p>$idUsuario</p><p>$nombre $apellidoP $apellidoM "; if($idUsuario=='AIMEDSPG9')echo "(DEVOLUCIÓN)";
				echo "</p><p>$correo</p>
				<div id='clearBoth'></div>
			</div>
			<div class='tdDiv1'>
				<p><span>Fecha de nacimiento:</span> $f</p><p><span>Sexo:</span> $sexo</p><p><span>Carrera:</span> $carrera</p>
				<div id='clearBoth'></div>
			</div>
			<div class='tdDiv1 "; if($idUsuario=='Jvelazquez14-1152') echo "line";	echo "'>
				<p><span>Grado de estudios:</span> $graE</p><p><span>Escuela de procedencia:</span> $escuelaP</p><p><span>semestre:</span> $semestre</p>
				<div id='clearBoth'></div>
			</div>
			<div class='tdDiv1 "; if($idUsuario=='AIMEDSPG30') echo "line";	echo "'>
				<p><span>Enfermedades:</span> $enfermedad</p><p><span>Medicamentos:</span> $medicamento</p><p><span>Alergias:</span> $alergias</p>
				<div id='clearBoth'></div>
			</div>
			<div class='tdDiv2'>
				<p><span>Contacto de emergencia:</span> $nombreCE</p><p><span>Teléfono:</span> $telefonoCE</p>
				<div id='clearBoth'></div>
			</div>
		</div>
		<div id='clearBoth'></div>
		";
		if($cont == $lim) { echo "<div id='salto'></div>"; $cont=0; $lim =7; }
		$cont ++;
	}

?>

<style>
	.contPG { border: 3px solid black; width: 950px; margin: 15px 0 0px 15px; font-family: bariol; font-size: 15px;}
	.thDiv { border-bottom: 3px solid; font-size: 18px; background: #edf3f5;}
	.thDiv p { float: left; text-align: center;}
	.thDiv p:nth-child(1){ width: 20%; }
	.thDiv p:nth-child(2){ width: 50%; }
	.thDiv p:nth-child(3){ width: 30%; }

	.tdDiv1, .tdDiv2, .thDiv{margin-top: 0px; padding: 0; line-height: 0;	}


	.tdDiv1 p { float: left; width: 32%; text-align: left; padding: 0 5px; }
	.tdDiv2 p { float: left;  text-align: left; padding: 0 5px;}
	.tdDiv2 p:nth-child(1){width: 65%;}
	.tdDiv2 p:nth-child(2){width: 32%;}

	span{color: #275b9a; }

	.line{ line-height: 12px !important;}
	#subtitPG{
		width: 100%;
    text-align: center;
    font-size: 24px;
    font-family: bariol;
    letter-spacing: 2px;
    margin: 70px 0 15px 0;
	}

	.menuFicha2{
	  font-family: bariol;
	  font-size: 39px;
	  color: #ffffff;
	  width: 100%;
	  text-align: center;
	  background: #009EAF;
	  position: absolute;
	  top: 0;
	  height: 60px;
	}
	.redC{
		background: #de9292;
	}
</style>


<div id='cuerpo'>
	<p>
		Constancias 'Foro Moviendo tu salud 2016'
	</p>
	<p>
		Estimado(a) $nombre1, te pedimos una disculpa por el tiempo que ha tardado la entrega de constancias,
		pero por cuestiones ajenas a nosotros se retrasó mas de lo esperado.
	</p>
	<p>
		Pero no te preocupes que estamos trabajando en ello y lo mas pronto posible les comunicaremos en donde,
		como y que día se entregarán.
	</p>
	<p>
		Te enviamos un cordial saludo y una disculpa nuevamente por el retraso de las constancias.
	</p>
	<p>
		Si tienes alguna duda, envía un correo a contacto@aimeds.org<br>
		Nosotros te responderemos en breve.
	</p>
</div>
<style>
	#cuerpo{
		width: 600px;
		margin: 0 auto;
		font-family: Bariol;
		border: 2px solid grey;
		padding: 20px 40px 40px;
	}
	#cuerpo p:nth-child(1){
	 font-size: 24px;
	 color: #00a6b7;
	 text-align: center;
	 font-weight: bold;
	 margin-bottom: 40px;
	}
	#cuerpo p:nth-child(2){font-size: 17px;}
	#cuerpo p:nth-child(3){font-size: 17px;}
	#cuerpo p:nth-child(4){font-size: 17px;}
	#cuerpo p:nth-child(5){
		font-size: 19px;
		font-weight: bold;
		text-align: center;
		margin-top: 40px;
	}
</style>
