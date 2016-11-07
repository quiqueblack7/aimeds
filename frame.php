<?php include("php/funciones.php"); ?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php if(isset($_GET['obPEM'])){
  if(!isset($_GET['idPais'])) $idPais=0; else $idPais = $_GET['idPais'];
  if(!isset($_GET['idEstado'])) $idEstado=0; else $idEstado = $_GET['idEstado'];
  if(!isset($_GET['idMun'])) $idMun=0; else $idMun = $_GET['idMun'];
?>
<body class='bPEM'>
  <form class='freg'>
    <div class='dCont2 dCont2-1'>
      <div><select id='sPais' name='pais' required>
        <option value=0 selected disabled>Selecciona una opción</option>
        <?php obPaises($idPais); ?>
      </select>
      <p>Pais</p></div>
      <div><select id='sEstado' name='estado' required>
				<option value=0 selected disabled>Selecciona una opción</option>
        <?php obEstados($idPais, $idEstado); ?>
      </select>
      <p>Estado</p></div>
      <div class='espPEM'><select id='sMun' name='mun' required>
				<option value=0 selected disabled>Selecciona una opción</option>
        <?php obMunicipios($idEstado, $idMun); ?>
      </select>
      <p>Municipio / Cuidad</p></div>
    </div>
  </form>

<?php }
if(isset($_GET['fPart1'])){
	foreach ($_GET as $var => $val) { echo "$var = $val<br>"; ${$var}=$val; }
	echo $_SESSION['idProy'];
	if(!isset($_SESSION['idProy'])){
		$sql = "SELECT * FROM responsable"; $res = queryP($sql);
		$row = mysql_num_rows($res); if($row == 0) $num = 1; else $num = $row + 1;
		$idProy = "Proyecto_".substr($app,0,1).substr($apm,0,1).$num;
		if($esp==15)$escuela = $esp2; else $escuela = $esp;
		$sql = "INSERT INTO responsable VALUES ('$idProy','$nom','$app','$apm',
					'$cor','$tel','$car','$gre','$escuela','$miem','$idAIMEDS')";
		$res = queryP($sql);

		$sql2 = "INSERT INTO principal (idProyecto) VALUES ('$idProy')";
		$res2 = queryP($sql2);

		$sql2 = "INSERT INTO poblacion (idProyecto) VALUES ('$idProy')";
		$res2 = queryP($sql2);

		$_SESSION['idProy'] = $idProy;
	}
	else{
		$idProy = $_SESSION['idProy'];
		if($esp==15)$escuela = $esp2; else $escuela = $esp;
		$sql = "UPDATE responsable SET nombre='$nom',
						apellidoP='$app',apellidoM='$apm',correo='$cor',telefono='$tel',
						carrera='$car',gradoE='$gre',escuelaP='$escuela',miembro='$miem',
						idMiembro = '$idAIMEDS' WHERE idProyecto = '$idProy'";
		$res = queryP($sql);


	}
}

if(isset($_GET['saveTemp'])){
	foreach ($_GET as $var => $val) { if($val=='on'){ $val=1; } ${$var} = $val; echo "$var -> $val <br>";	}
	$idProy = $_SESSION['idProy'];
	if(!isset($pubF)) { $pubF = 0; $dPF=''; }
	if(!isset($pubRS)) { $pubRS = 0; $dPRS=''; }

	if($esp==15)$escuela = $esp2; else $escuela = $esp;
	$sql = "UPDATE responsable SET nombre='$nom',
					apellidoP='$app',apellidoM='$apm',correo='$cor',telefono='$tel',
					carrera='$car',gradoE='$gre',escuelaP='$escuela',miembro='$miem',
					idMiembro = '$idAIMEDS' WHERE idProyecto = '$idProy'";
	$res = queryP($sql);

	$sql = "UPDATE principal SET nombreProyecto='$nomP',
					justificacion='$jus', poblacion='$pob', fecha1='$fech1', fecha2='$fech2',
					lugarP='$lProb', planTrabajo='$pTrab', pubFisica='$pubF', desFisica='$dPF',
					pubRedes='$pubRS', desRedes='$dPRS' WHERE idProyecto = '$idProy'";
					echo $sql;
	$res = queryP($sql);

	$sql2 = "UPDATE poblacion SET medicina='$dirM', enfermeria='$dirE', nutricion='$dirN',
	 				bioquimica='$dirB', odonto='$dirOd', opto='$dirOp', psico='$dirP',
					todas='$dirAll', otra='$dirOt' WHERE idProyecto = '$idProy'";
	$res2 = queryP($sql2);
	echo $sql2;
}
?>

<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>
</body>
</html>
