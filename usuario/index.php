<?php
  include("../php/funciones.php");
  if(!isset($_SESSION['idUsuario'])) {  header("Location: ../index.php#afiliados"); }
  else $idUsuario = $_SESSION['idUsuario'];
  $act=0;
  $sql = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
  $res = query($sql);
  $cam = mysql_fetch_assoc($res);
  foreach ($cam as $var => $val) { ${$var} = $val; }
  $nombreC = "$nombre $apellidoP";

  $sql = "SELECT * FROM beca WHERE idUsuario = '$idUsuario'";
  $res = query($sql);
  $beca = mysql_fetch_row($res);
  if($beca>0) $act=1;

  $sql = "SELECT * FROM primeraguardia WHERE idUsuario = '$idUsuario'";
  $res = query($sql);
  $PG = mysql_fetch_row($res);
  if($PG>0){ $act=1; $cam = mysql_fetch_assoc($res); $status = $cam['status']; }


?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<link rel="icon" type="image/png" href="../images/icon.png">
	<link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body id='bodyUsuario'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='../images/logoWhite.png'></a>
    <p class='menuUser' id='salirU'>SALIR <i class="fa fa-sign-out"></i></p>
    <p class='menuUser'><a href="index.php">HOME <i class="fa fa-home"></i></a></p>
  </div>
  <div id='dImgAF'>
    <h1>Área de afiliados</h1>
    <p>
      Aquí podrás encontrar información sobre nuestros próximos proyectos,
      obtener beneficios exclusivos para afiliados AIMEDS e inscribirte a
      nuestras actividades.
    </p>
  </div>

  <div id='preCont'>
    <p id='titulo'>Bienvenido(a) <?php echo $nombreC; ?></p>
    <p id='titulo2'>No. de afiliación: <?php echo $idUsuario; ?></p>
  </div>
  <div id='contenido'>
    <div id='opCont'>
      <div id='opIzq'>Eventos y beneficios</div>
      <div id='opDer'>Mi actividad</div>
    </div>

  <div id='beneficiosA'>
    <div class='anIzq'>
      <img src='../images/prox1.jpg' class='img'>
    </div>
    <div class='anMed'>
      <p>30 becas del 100%</p>
      <p>
        Solicita tu beca para el "Quinto curso guías instruccionales en
        Ginecología y Obstetricia para médicos de primer contacto".<br><br>
        Nota: Curso único y exclusivamente para médicos o alumnos de medicina
      </p>
    </div>
    <div class='anDer'>
      <div class="btn1"><a href="beca.php"><p>Ver detalles</p></a></div>
    </div>

    <div class='anIzq'>
      <img src='../images/PG1.jpg' class='img'>
    </div>
    <div class='anMed'>
      <p>¿Qué hacer en mi primera guardia?</p>
      <p>
        Curso/taller que se llevará a cabo los dias 15 y 16 de octubre.
        No esperes más y revisa los temas a tratar, además, al ser afiliado
        AIMEDS obtienes un descuento especial.
        <p id='costo1'>Cuota de recuperación afiliados $ 250.00</p>
        <p id='costo2'>Cuota de recuperación general $ 400.00</p>
      </p>
    </div>
    <div class='anDer'>
      <div class="btn1"><a href="../primeraguardia"><p>Ver detalles</p></a></div>
    </div>

    <div class='anIzq'>
      <img src='../images/cred.jpg' class='img'>
    </div>
    <div class='anMed'>
      <p>Solicita tu credencial AIMEDS</p>
      <p>Proximamente podrás obtener tu credencial de afiliado AIMEDS.</p>
      <p style='width: 100%; font-family: bariol; font-size: 19px; margin: 34px 0 0 120px;'>Espérala</p>
    </div>
    <div class='anDer'></div>
  </div>
  <div id='miAct'>
    <?php if($act>0){
      if($beca>0){ ?>
      <div class='anIzq'>
        <img src='../images/prox1.jpg' class='img'>
      </div>
      <div class='anMed'>
        <p>BECA SOLICITADA</p>
        <p>
          Se informará a los ganadores de la beca por correo electrónico, mantente al tanto.
        </p>
      </div>
      <div class='anDer'> </div>
    <?php }
    if($PG>0){ ?>
      <div class='anIzq'>
        <img src='../images/PG1.jpg' class='img'>
      </div>
      <div class='anMed'>
        <?php if($status==0) echo "<p>EN PROCESO</p>";
        if($status==1) {
          echo "<p>CURSO PAGADO</p>";
          echo "<p>Se informará proximamente algunas recomendaciones de como
          asistir al evento por correo electrónico, mantente al tanto</p>";
        }?>

      </div>
      <div class='anDer'> </div>
  <?php }

}else{ ?>
      <div id='noAct'>No hay actividad reciente en esta cuenta.</div>
    <?php } ?>
  </div>
    <div class='clearBoth'></div>
  </div>


  <script src='../js/jquery-3.1.0.js'></script>
  <script src='../js/funciones.js'></script>
</body>
</html>
