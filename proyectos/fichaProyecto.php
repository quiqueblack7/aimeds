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
	$idProy = $_SESSION['idProy'];
	$sql = "SELECT * FROM responsable WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) {  ${$var} = $val;	}

	$sql = "SELECT * FROM principal WHERE idProyecto = '$idProy'";
	$res = queryP($sql);
	$cam = mysql_fetch_assoc($res);
	foreach ($cam as $var => $val) {  ${$var} = $val;	}

	if($miembro==1)	$aimeds = $idMiembro;
	else $aimeds = "NO";
?>
<body class='bodyProy'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='../images/logoWhite.png'></a>
	</div>
	<div id='cuerpo'>
	  <p id='p1FP'>
	  Proyecto guardado exitósamente
	  </p>

		<table id='tFProy'>
			<thead><tr><th colspan="2"><?php echo "$nombreProyecto";  ?></th></tr></thead>
			<tbody>
				<tr>
					<td>ID del proyecto</td>
					<td><?php echo "$idProyecto"; ?></td>
				</tr>
				<tr>
					<td>Responsable</td>
					<td><?php echo "$nombre $apellidoP $apellidoM"; ?></td>
				</tr>
				<tr>
					<td>Correo electrónico</td>
					<td><?php echo "$correo"; ?></td>
				</tr>
				<tr>
					<td>Miembro AIMEDS</td>
					<td><?php echo "$aimeds"; ?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<p>
	  	Revisaremos tu  proyecto cuidadosamente y nos pondremos en contacto contigo
			lo mas pronto posible.
	  </p>
	  <p>
	    Para poder editar la información posteriormente, deberás conocer el ID del proyecto,
			así que te recomendamos guardarlo cuidadosamente.
	  </p><br>
		<div>
			<button class='btnFP' id='printFP'>Imprimir</button>
			<button class='btnFP' id='exitFP'>Salir</button>
		</div>
	  <p id='contaInfo'>
	    Si tienes alguna duda, envía un correo a contacto@aimeds.org<br>
	    Nosotros te responderemos en breve.
	  </p>
	</div>


	<style>
	  #cuerpo{
	    width: 600px;
	    margin: 100px auto;
	    font-family: Bariol;
	    border: 2px solid grey;
	    padding: 20px 40px 40px;
			background: #f3f3f3;
	  }
	  #p1FP{
	   font-size: 24px!important;
	   color: #00a6b7;
	   text-align: center;
	   font-weight: bold;
	   margin-bottom: 40px;
	  }
	  #cuerpo p{ font-size: 17px;}
	  #contaInfo{
	    font-size: 19px;
	    font-weight: bold;
	    text-align: center;
	    margin-top: 40px;
	  }
		#tFProy{ width: 550px;  border: solid;  margin: 0 auto; border-collapse: collapse;}
		#tFProy th {border: 2px solid #777; font-size: 19px; letter-spacing: 2px; padding: 5px;}
		#tFProy td {
			font-size: 17px;
			padding: 5px 40px;
			border: 2px solid #bbb;
		}
		.btnFP{
			width: 140px;
	    font-size: 17px;
	    font-family: bariol;
	    margin: 0px 79px;
			cursor: pointer;
		}

	</style>

<script src="../js/funciones.js"></script>
</body>
</html>
