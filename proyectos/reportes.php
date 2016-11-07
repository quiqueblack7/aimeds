<?php
  include("../php/funciones.php");
?>
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
<body class='bodyProy'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='../images/logoWhite.png'></a>
	</div>

<div id='contRepP'>
  <?php if(!isset($_GET['id'])){ ?>
    <table id='tAllP'>
      <thead>
        <tr>
          <th>ID proyecto</th>
          <th>Nombre</th>
          <th>Fecha del evento</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php getAllP(); ?>
      </tbody>
    </table>
  <?php } else {
    $idProyecto = $_GET['id'];
    $sql = "SELECT * FROM principal WHERE idProyecto = '$idProyecto'";
    $res = queryP($sql); $cam = mysql_fetch_assoc($res);
    foreach ($cam as $var => $val) { ${$var} = $val;  }
    $sql = "SELECT * FROM responsable WHERE idProyecto = '$idProyecto'";
    $res = queryP($sql); $cam = mysql_fetch_assoc($res);
    foreach ($cam as $var => $val) { ${$var} = $val;  }
  ?>
    <p id='titPP'>Propuesta del <?php echo $idProyecto; ?> </p>

    <div class='contPP'>
      <p>Responsable: </p>
      <p>
        <?php
          if($gradoE==1) $graE = "Estudiante de nivel medio superior";
          if($gradoE==2) $graE = "Estudiante de Licenciatura";
          if($gradoE==3) $graE = "Licenciado / Licenciada";
          if($gradoE==4) $graE = "Estudiante de Maestría";
          if($gradoE==5) $graE = "Maestro / Maestra";
          if($gradoE==6) $graE = "Estudiante de Doctorado";
          if($gradoE==7) $graE = "Doctor / Doctora";
          echo "$nombre $apellidoP $apellidoM<br><br>$graE, en la carrera $carrera,
          procedente de $escuelaP<br><br>Correo electrónico: $correo<br><br>
          Teléfono: $telefono";
        ?>
      </p>
      <div class='clearBoth'></div>
    </div>

    <div class='contPP'>
      <p>Justificacion: </p>
      <p><?php echo $justificacion; ?></p>
      <div class='clearBoth'></div>
    </div>

    <div class='contPP'>
      <p>Objetivos: </p>
      <p>
        <?php
          $sql1 = "SELECT * FROM objetivos WHERE idProyecto = '$idProyecto'";
          $res1 = queryP($sql1);
          while($cam1=mysql_fetch_assoc($res1)){
            foreach ($cam1 as $var => $val) { ${$var} = $val; }
            echo "$idObjetivo.- $objetivo<br><br>";
          }
        ?>
      </p>
      <div class='clearBoth'></div>
    </div>

    <div class='contPP'>
      <p>Plan de trabajo: </p>
      <p><?php echo $planTrabajo; ?></p>
      <div class='clearBoth'></div>
    </div>

    <div class='contPP'>
      <p>Poblacion: </p>
      <p>
        <?php
          if($poblacion==1) $pob= "estudiantes";
          if($poblacion==2) $pob= "profesionales";
          if($poblacion==3) $pob= "estudiantes y profesionales";
          $sql1 = "SELECT * FROM poblacion WHERE idProyecto = '$idProyecto'";
          $res1 = queryP($sql1); $cam1 = mysql_fetch_assoc($res1);
          foreach ($cam1 as $var => $val) { ${$var} = $val; }
          $carre = '';
          if($todas==1) $carre .= '- Medicina<br>- Enfermería<br>- Nutrición<br>
          - Bioquímica<br>- Odontología<br>- Optometría<br>- Psicología<br>';
          else{
            if($medicina==1) $carre .= '- Medicina<br>';
            if($enfermeria==1) $carre .= '- Enfermería<br>';
            if($nutricion==1) $carre .= '- Nutrición<br>';
            if($bioquimica==1) $carre .= '- Bioquímica<br>';
            if($odonto==1) $carre .= '- Odontología<br>';
            if($opto==1) $carre .= '- Optometría<br>';
            if($psico==1) $carre .= '- Psicología<br>';
          }
          if($otra==1) $carre .= "- $otraNombre<br>";
          echo "Dirigido a $pob de:<br>$carre";
        ?>
      </p>
      <div class='clearBoth'></div>
    </div>

    <div class='contPP'>
      <p>Lugar y fecha: </p>
      <p>
        <?php
        $meses = array('','enero','febrero','marzo','abril','mayo','junio',
        'julio','agosto','septiempre','octubre','noviembre','diciembre');

        $fecha11 = strtotime("$fecha1");  $dia1 = date('d',$fecha11);
        $mes1 = date('m',$fecha11);  $anio1 = date('Y',$fecha11);
        $fechaN1 = $dia1." de ".$meses[$mes1]." de ". $anio1;

        $fecha22 = strtotime("$fecha2");  $dia2 = date('d',$fecha22);
        $mes2 = date('m',$fecha22);  $anio2 = date('Y',$fecha22);
        $fechaN2 = $dia2." de ".$meses[$mes2]." de ". $anio2;

        if($fecha2!='0000-00-00') $diaP = " del día $fechaN1 al $fechaN2";
        else $diaP = " el día $fechaN1";
          echo "$lugarP $diaP";
        ?>
      </p>
      <div class='clearBoth'></div>
    </div>

    <div class='contPP'>
      <p>Publicidad: </p>
      <p>
        <?php
          if($pubFisica==0) $fis = "Física: NO";
          else $fis = "Física: $desFisica";
          if($pubRedes==0) $red = "Redes sociales: NO";
          else $red = "Redes sociales: $desRedes";
          echo "$fis<br><br>$red";
        ?>
      </p>
      <div class='clearBoth'></div>
    </div>
    
    <div class='salto'></div>

    <div class='contPP2'>
      <div>
        <p class='titTPP'>Recursos humanos</p>
        <?php getRecH2($idProyecto); ?>
      </div>
      <div>
        <p class='titTPP'>Autorizaciones</p>
        <?php getAut2($idProyecto); ?>
      </div>
    </div>

    <div class='contPP3'>
      <p class='titTPP marti'>Recursos materiales<br>(Tabla de presupuestos)</p>
      <?php getPre2($idProyecto); ?>
    </div>

    <div class='clearBoth'></div>




  <?php } ?>
</div>



<script src="../js/funciones.js"></script>
</body>
</html>
