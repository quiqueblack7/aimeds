<?php

date_default_timezone_set("America/Mexico_City");
include("crypt.php");
session_start();


function conectar(){
  $link = mysql_connect("localhost", "aimedsor01", 'uQs7$x72');
  mysql_set_charset('utf8');
  mysql_select_db("aimedsor_principal", $link)
  OR DIE("Error: No es posible establecer la conexi&oacute;n");
  return $link;
}

function query($sql) {
  $con=conectar();
  $result = mysql_query($sql, $con);
  return $result;
}

function conectarD(){
  $link = mysql_connect("localhost", "aimedsor01", 'uQs7$x72');
  mysql_set_charset('utf8');
  mysql_select_db("aimedsor_direcciones", $link)
  OR DIE("Error: No es posible establecer la conexi&oacute;n");
  return $link;
}

function queryD($sql) {
  $con=conectarD();
  $result = mysql_query($sql, $con);
  return $result;
}

function conectarP(){
  $link = mysql_connect("localhost", "aimedsor01", 'uQs7$x72');
  mysql_set_charset('utf8');
  mysql_select_db("aimedsor_proyectos", $link)
  OR DIE("Error: No es posible establecer la conexi&oacute;n");
  return $link;
}

function queryP($sql) {
  $con=conectarP();
  $result = mysql_query($sql, $con);
  return $result;
}

//FUNCION NUEVO REGISTRO 2
function newUser(){
  $idUsuario = genidUsuario2();
  foreach ($_GET as $var => $val) { ${$var}=$val; }

    if($esc == 1) $esc = "UNAM CU";
    if($esc == 2) $esc = "UNAM FESI";
    if($esc == 3) $esc = "UNAM FESZ";
    if($esc == 4) $esc = "IPN ESM";
    if($esc == 5) $esc = "IPN ENMyH";
    if($esc == 6) $esc = "IPN ENCB";
    if($esc == 7) $esc = "IPN CICS";
    if($esc == 8) $esc = "IPN ESEO";
    if($esc == 9) $esc = "UAM Xochimilco";
    if($esc == 10) $esc = "La salle";
    if($esc == 11) $esc = "Justo Sierra";
    if($esc == 12) $esc = "West Hill";
    if($esc == 13) $esc = "UP";
    if($esc == 14) $esc = "Escuela Médico Militar";

  $fecha = date("Y-m-d");
  $hora = date("H:i:s");;
  $sql = "INSERT INTO usuarios VALUES ('$idUsuario', '$nom', '$app',
   '$apm', '$fec', '$sex','$idP','$idE','$idM',
   '$car', '$gre', '$esc', '$ema', '')";
  $res = query($sql);
  if($res){
    $sql = "SELECT * FROM registro";
    $res = query($sql); $row = mysql_num_rows($res);
    if($row>0) $numero = $row+1;
    else $numero = 1;
    $sql = "INSERT INTO registro VALUES ('$idUsuario','$numero', '$fecha', '$hora')";
    $res = query($sql);
    if($res){
      $pass = genPassword();
      $pass2 = cryptRS($idUsuario,$pass);
      $sql = "INSERT INTO login VALUES ('$idUsuario','$pass2', '2', '0')";
      $res = query($sql);
      echo $pass;
      echo "<br>$sql";
      if($res){
        $_SESSION['ref'] = $idUsuario;
        return($idUsuario);
      }
      else return ('none');
    }
    else return ('none');
  }
  else {return('none');}
}


//NUEVO REGISTRO
if(isset($_GET['insReg'])){
  $idUsuario = genidUsuario($_POST);
  foreach ($_POST as $var => $val) { ${$var}=$val; }
  foreach ($_GET as $var => $val) { ${$var}=$val; }
  if($escuelaP == 15) $escuelaP = $escuelaP2;
  else{
    if($escuelaP == 1) $escuelaP = "UNAM CU";
    if($escuelaP == 2) $escuelaP = "UNAM FESI";
    if($escuelaP == 3) $escuelaP = "UNAM FESZ";
    if($escuelaP == 4) $escuelaP = "IPN ESM";
    if($escuelaP == 5) $escuelaP = "IPN ENMyH";
    if($escuelaP == 6) $escuelaP = "IPN ENCB";
    if($escuelaP == 7) $escuelaP = "IPN CICS";
    if($escuelaP == 8) $escuelaP = "IPN ESEO";
    if($escuelaP == 9) $escuelaP = "UAM Xochimilco";
    if($escuelaP == 10) $escuelaP = "La salle";
    if($escuelaP == 11) $escuelaP = "Justo Sierra";
    if($escuelaP == 12) $escuelaP = "West Hill";
    if($escuelaP == 13) $escuelaP = "UP";
    if($escuelaP == 14) $escuelaP = "Escuela Médico Militar";
  }
  $fecha = date("Y-m-d");
  $hora = date("H:i:s");;
  $sql = "INSERT INTO usuarios VALUES ('$idUsuario', '$nombre', '$apellidoP',
   '$apellidoM', '$fechaNac', '$sexo','$idPais','$idEstado','$idMunicipio',
   '$carrera', '$gradoEst', '$escuelaP', '$email', '')";
  $res = query($sql);
  if($res){
    $sql = "SELECT * FROM registro";
    $res = query($sql); $row = mysql_num_rows($res);
    if($row>0) $numero = $row+1;
    else $numero = 1;
    $sql = "INSERT INTO registro VALUES ('$idUsuario','$numero', '$fecha', '$hora')";
    $res = query($sql);
    if($res){
      $pass = genPassword();
      $pass2 = cryptRS($idUsuario,$pass);
      $sql = "INSERT INTO login VALUES ('$idUsuario','$pass2', '2', '0','0000-00-00')";
      $res = query($sql);
      echo $pass;
      echo "<br>$sql";
      if($res){
        $_SESSION['ref'] = $idUsuario;
        enviarMailRegistro($nombre,$apellidoP,$email,$idUsuario);
        header("Location: ../ficha.php");
      }
      else echo "Error Registro #3";
    }
    else echo "Error Registro #2";
  }
  else echo "Error registro #1";
}

//GENERAR ID DE USUARIO
function genidUsuario(){
  foreach ($_POST as $var => $val) { ${$var}=$val; }
  $lNo = strtoupper(substr($nombre,0,1));
  $apellidoP = quitarA($apellidoP);
  $apP = strtolower(str_replace(' ','',$apellidoP));
  $nFN = substr($fechaNac,8,2);
  $sql = "SELECT * FROM usuarios";
  $res = query($sql); $row = mysql_num_rows($res); $gen = 0;
  for($i=0; $i<=$row; $i=$i+1000){
    if($i<=$row) $gen++;
    }
  if($sexo=="Masculino") $nS = 1;
  else $nS = 2;
  $idUsuario =  "$lNo$apP$nFN-$gen$escuelaP$nS";
  echo $idUsuario;
  return($idUsuario);
}

//GENERAR ID DE USUARIO 2
function genidUsuario2(){
  foreach ($_GET as $var => $val) { ${$var}=$val; }
  $lNo = strtoupper(substr($nom,0,1));
  $app = quitarA($app);
  $apP = strtolower(str_replace(' ','',$app));
  $nFN = substr($fec,8,2);
  if($esc!=1&&$esc!=2&&$esc!=3&&$esc!=4&&$esc!=5&&$esc!=6&&$esc!=7&&$esc!=8&&$esc!=9&&$esc!=10&&$esc!=11&&$esc!=12&&$esc!=13&&$esc!=14) $esc=15;
  $sql = "SELECT * FROM usuarios";
  $res = query($sql); $row = mysql_num_rows($res); $gen = 0;
  for($i=0; $i<=$row; $i=$i+1000){
    if($i<=$row) $gen++;
    }
  if($sex=="Masculino") $nS = 1;
  else $nS = 2;
  $idUsuario =  "$lNo$apP$nFN-$gen$esc$nS";
  echo $idUsuario;
  return($idUsuario);
}

//GENERAR PASSWORD
function genPassword(){
  $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
  $pass = "";
  for($i=0; $i<6; $i++) {
    $pass .= substr($str,rand(0,62),1);
  }
  return($pass);
}

//OBTENER LISTA DE PAISES
function obPaises($idP){
  $sql = "SELECT * FROM paises ORDER BY nombre";
  $res = queryD($sql);
  while($cam = mysql_fetch_assoc($res)){
    foreach ($cam as $var => $val) { ${$var} = $val;  }
    echo "<option value='$idPais' ";
    if($idP==$idPais) echo "selected";
    echo "> $nombre </option>";
  }
}

//OBTENER LISTA DE ESTADOS
function obEstados($idP, $idE){
  $sql = "SELECT * FROM estados WHERE idPais = $idP ORDER BY nombre";
  $res = queryD($sql);
  while($cam = mysql_fetch_assoc($res)){
    foreach ($cam as $var => $val) { ${$var} = $val;  }
    echo "<option value='$idEstado' ";
    if($idE==$idEstado) echo "selected";
    echo "> $nombre </option>";
  }
}

//OBTENER LISTA DE MUNICIPIOS / CIUDADES
function obMunicipios($idE, $idM){
  $sql = "SELECT * FROM municipios WHERE idEstado='$idE' ORDER BY nombre";
  $res = queryD($sql);
  while($cam = mysql_fetch_assoc($res)){
    foreach ($cam as $var => $val) { ${$var} = $val;  }
    echo "<option value='$idMunicipio'> $nombre </option>";
  }
}
//FUNCION QUITAR ACENTOS Y CARACTERES ESPECIALES
function quitarA($string){
  $string = trim($string);
  $string = str_replace( array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
    array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'), $string);
  $string = str_replace( array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
    array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'), $string);
  $string = str_replace( array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
    array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'), $string);
  $string = str_replace( array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
    array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'), $string);
  $string = str_replace(array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
    array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'), $string);
  $string = str_replace(array('ñ', 'Ñ', 'ç', 'Ç'),
    array('n', 'N', 'c', 'C',), $string);
  $string = str_replace(array("/", "¨", "º", "-", "~", "#", "@", "|", "!", '"',
    "·", "$", "%", "&", "/", "(", ")", "?", "'", "¡"- "¿", "[", "^", "<code>", "]",
    "+", "}", "{", "¨", "´",">", "< ", ";", ",", ":", ".", " "),
    '', $string);

  return $string;
}

//AGREGAR NUEVO OBJETIVO DE PROYECTOS
if(isset($_GET['addObj'])){
  $idProyecto = $_SESSION['idProy'];
  $desc = $_GET['desc'];
  $sql = "SELECT * FROM objetivos WHERE idProyecto = '$idProyecto' order BY idObjetivo DESC";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row==0) $idObjetivo = 1;  else {$cam = mysql_fetch_assoc($res); $idObjetivo = $cam['idObjetivo']+1;};
  $sql = "INSERT INTO objetivos VALUES ('$idProyecto','$idObjetivo','$desc')";
  $res = queryP($sql);
  header("Location: ../proyectos");
}


//OBTENER TABLA OBJETIVOS DE PROYECTOS
function getObjs($idProy){

  $sql = "SELECT * FROM objetivos WHERE idProyecto = '$idProy'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row>0){
    echo "<table id='tObj'>
      <thead>
        <tr>
        <th>Número</th>
        <th>Objetivo</th>
        <th></th>
      </tr>
    </thead>
    <tbody id='tbOb'>";
    $cont = 1;
    while($cam = mysql_fetch_assoc($res)){
      foreach ($cam as $var => $val) { ${$var} = $val; }
      echo "<tr>
            <td>$cont</td>
            <td>$objetivo</td>
            <td><i class='fa fa-trash' alt='Eliminar' onclick='elimObj("; echo "$idObjetivo,$cont"; echo ")'></i></td>
            </tr>";
            $cont++;
    }
    echo "</tbody></table>";
    return ("obj1");
  }
  else { return ("obj2"); }
}

function getPre($idProy){
  $sql = "SELECT * FROM presupuesto WHERE idProyecto = '$idProy'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row>0){
    echo "<table id='tpres'>
      <thead>
        <tr>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
        <th>Lugar</th>
        <th></th>
      </tr>
    </thead>
    <tbody id='tbpres'>";
    $gTotal = 0;
    while($cam = mysql_fetch_assoc($res)){
      foreach ($cam as $var => $val) { ${$var} = $val; }
      echo "<tr>
            <td>$descripcion</td>
            <td>$cantidad</td>
            <td>$precio</td>
            <td>$total</td>
            <td>$lugar</td>
            <td><i class='fa fa-trash' alt='Eliminar' onclick='elimPre("; echo "$idPartida"; echo ")'></i></td>
            </tr>";
            $gTotal = $gTotal + $total;
    }
    echo "</tbody> </table>
    <div><p id='gTotal'>TOTAL</p>
    <p id='gTotal2'>$gTotal</p></div>";
    return("pre1");
  }
  else { return("pre2"); }
}


function getAut($idProy){

  $sql = "SELECT * FROM autorizaciones WHERE idProyecto = '$idProy'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row>0){
    echo "<table id='tObj'>
      <thead>
        <tr>
        <th>Autorización</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody id='tbOb'>";
    while($cam = mysql_fetch_assoc($res)){
      foreach ($cam as $var => $val) { ${$var} = $val; }
      echo "<tr>
            <td>$descripcion</td>
            <td>$status</td>
            <td><i class='fa fa-trash' alt='Eliminar' onclick='elimAut("; echo "$idAuto"; echo ")'></i></td>
            </tr>";
    }
    echo "</tbody></table>";
    return("aut1");
  }
  else { return ("aut2"); }
}

if(isset($_GET['addAut'])){
  $idProyecto = $_SESSION['idProy'];
  $desc = $_GET['nomAut'];
  $sql = "SELECT * FROM autorizaciones WHERE idProyecto = '$idProyecto' order BY idAuto DESC";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row==0) $idAuto = 1;  else {$cam = mysql_fetch_assoc($res); $idAuto = $cam['idAuto']+1;};
  $sql = "INSERT INTO autorizaciones VALUES ('$idProyecto','$idAuto','$desc','0')";
  $res = queryP($sql);
  header("Location: ../proyectos/proyectos.php#addAut");
}

if(isset($_GET['addMat'])){
  $idProyecto = $_SESSION['idProy'];
  foreach ($_GET as $var => $val) { ${$var} = $val;  }
  $totP = $canP*$preP;
  $sql = "SELECT * FROM presupuesto WHERE idProyecto = '$idProyecto' order BY idPartida DESC";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row==0) $idPartida = 1;  else {$cam = mysql_fetch_assoc($res); $idPartida = $cam['idPartida']+1;};
  $sql = "INSERT INTO presupuesto VALUES ('$idProyecto','$idPartida','$desP','$canP','$preP','$totP','$lugP')";
  $res = queryP($sql);
  header("Location: ../proyectos/proyectos.php#addPres");
}


//AGREGAR NUEVO OBJETIVO DE PROYECTOS
if(isset($_GET['addPer'])){
  $idProyecto = $_SESSION['idProy'];
  foreach ($_GET as $var => $val) { ${$var} = $val; }
  $sql = "SELECT * FROM rhumanos WHERE idProyecto = '$idProyecto' order BY idRH DESC";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row==0) $idRH = 1;  else {$cam = mysql_fetch_assoc($res); $idRH = $cam['idRH']+1;};
  $sql = "INSERT INTO rhumanos VALUES ('$idProyecto','$idRH','$nomRH','$carRH')";
  $res = queryP($sql);
  echo $sql;
  header("Location: ../proyectos/proyectos.php#addRH");
}

function getRecH($idProy){
  $sql = "SELECT * FROM rhumanos WHERE idProyecto = '$idProy'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row>0){
    echo"<table id='tObj'>
      <thead>
        <tr>
        <th>Nombre</th>
        <th>Cargo</th>
        <th></th>
      </tr>
    </thead>
    <tbody id='tbOb'>";
    while($cam = mysql_fetch_assoc($res)){
      foreach ($cam as $var => $val) { ${$var} = $val; }
      echo "<tr>
            <td>$nombre</td>
            <td>$cargo</td>
            <td><i class='fa fa-trash' alt='Eliminar' onclick='elimRH("; echo "$idRH,".'"'.$nombre.'"'; echo ")'></i></td>
            </tr>";
    }
    echo "</tbody></table>";
    return ("rech1");
  }
  else { return ("rech2"); }
}
if(isset($_GET['elimRH'])){
  $idProyecto = $_SESSION['idProy'];
  $idRH = $_GET['idRH'];
  $sql = "DELETE FROM rhumanos WHERE idProyecto = '$idProyecto' AND idRH = '$idRH'";
  $res = queryP($sql);
  header("Location: ../proyectos");
}

if(isset($_GET['elimAut'])){
  $idProyecto = $_SESSION['idProy'];
  $idAut = $_GET['idAut'];
  $sql = "DELETE FROM autorizaciones WHERE idProyecto = '$idProyecto' AND idAuto = '$idAut'";
  $res = queryP($sql);
  header("Location: ../proyectos");
}

if(isset($_GET['elimMat'])){
  $idProyecto = $_SESSION['idProy'];
  $idP = $_GET['idP'];
  $sql = "DELETE FROM presupuesto WHERE idProyecto = '$idProyecto' AND idPartida = '$idP'";
  $res = queryP($sql);
  header("Location: ../proyectos");
}

if(isset($_GET['elimObj'])){
  $idProyecto = $_SESSION['idProy'];
  $idObjetivo = $_GET['idObjetivo'];
  $sql = "DELETE FROM objetivos WHERE idProyecto = '$idProyecto' AND idObjetivo = '$idObjetivo'";
  $res = queryP($sql);
  header("Location: ../proyectos");
}

if(isset($_GET['login'])){
  foreach ($_POST as $var => $val) { echo "$var->$val<br>"; ${$var}=$val;  }
  $sql = "SELECT * FROM login WHERE idUsuario='$idUsuario'";
  $res = query($sql);
  $row = mysql_num_rows($res);
  if($row==1){
    $cam = mysql_fetch_assoc($res);
    $activo = $cam['activo'];
    $passDB = $cam['password'];
    $pass = getOPass($passDB);
    if($activo==1){
      echo $idUsuario;
      if($pass==$password){
      $_SESSION['idUsuario'] = $idUsuario;
      header("Location: ../usuario");
      }
      else{ header("Location: ../index.php?error=wrongUserPass#afiliados");  }
    }
    else{ header("Location: ../index.php?error=inactiveUser#afiliados"); }
  }
  else{ header("Location: ../index.php?error=userNotFound#afiliados"); }


}

if(isset($_GET['closeProy'])){
  unset($_SESSION['idProy']);
  header("Location: ../proyectos");
}

if(isset($_GET['proyExis'])){
  $idP = $_GET['idProy'];
  $sql = "SELECT * FROM principal WHERE idProyecto='$idP'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row==1){
    $_SESSION['idProy'] = $idP;
    header("location: ../proyectos/proyectos.php");
  }
  else header("location: ../proyectos/?error=1F0xp");
}

//REGISTRO BECA GINECOLOGIA HOSPITAL ESPAÑOL
if(isset($_GET['solBeca'])){
  $idUsuario = $_SESSION['idUsuario'];
  $sql = "INSERT INTO beca VALUES('$idUsuario')";
  $res = query($sql);
  if($res){
    header("Location: ../usuario/beca.php");
  }
  else{
    header("Location: ../usuario/beca.php?error=000fx123");
  }
}

//REGISTRO TALLER MI PRIMERA GUARDIA
if(isset($_GET['regPG'])){
  foreach ($_GET as $var => $val) { ${$var}=$val; }
  $fechaH = date('Y-m-d');
  if($regPG == 1){
    $sql = "SELECT * FROM login WHERE idUsuario = '$idUsuario' AND activo = 1";
    $res = query($sql);
    $row = mysql_num_rows($res);
    if($row>0){
      $sql = "SELECT * FROM primeraguardia ORDER BY numero DESC";
      $res = query($sql); $row = mysql_num_rows($res);
      if($row!=0){ $cam = mysql_fetch_assoc($res); $numero = $cam['numero']+1; }
      else $numero = 1;
      $sql = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
      $res = query($sql); $cam = mysql_fetch_assoc($res);
      foreach ($cam as $var => $val) { ${$var} = $val;  }
      $sql = "INSERT INTO primeraguardia VALUES ('$idUsuario','$numero','$nombre',
      '$apellidoP','$apellidoM','$fechaNac','$sexo','$email','$carrera','$gradoEst',
      '$escuelaP','$sem','$enf','$med','$alg','$cem','$tem','$fechaH','1','0')";
      $res =  query($sql);
      if($res) {
        $_SESSION['nombrePG'] = "$nombre $apellidoP $apellidoM";
        $nombre1 = "$nombre $apellidoP $apellidoM";
        $_SESSION['idUsuarioPG'] = "$idUsuario";
        $_SESSION['tipoPG'] = 1;
        enviarMailPG($nombre1, $email, $idUsuario,$regPG);
        header("Location: ../fichaPrimeraGuardia.php");
      }
      else header("Location: ../registroPrimeraGuardia.php?error=0fx001");
    }
    else header("Location: ../registroPrimeraGuardia.php?error=0fx001");
  }

  if($regPG == 2){
    $sql = "SELECT * FROM primeraguardia ORDER BY numero DESC";
    $res = query($sql); $row = mysql_num_rows($res);
    if($row!=0){ $cam = mysql_fetch_assoc($res); $numero = $cam['numero']+1; }
    else $numero = 1;
    $idUsuario = "AIMEDSPG$numero";
    if($esc == 1) $esc = "UNAM CU";
    if($esc == 2) $esc = "UNAM FESI";
    if($esc == 3) $esc = "UNAM FESZ";
    if($esc == 4) $esc = "IPN ESM";
    if($esc == 5) $esc = "IPN ENMyH";
    if($esc == 6) $esc = "IPN ENCB";
    if($esc == 7) $esc = "IPN CICS";
    if($esc == 8) $esc = "IPN ESEO";
    if($esc == 9) $esc = "UAM Xochimilco";
    if($esc == 10) $esc = "La salle";
    if($esc == 11) $esc = "Justo Sierra";
    if($esc == 12) $esc = "West Hill";
    if($esc == 13) $esc = "UP";
    if($esc == 14) $esc = "Escuela Médico Militar";
    $sql = "INSERT INTO primeraguardia VALUES ('$idUsuario','$numero','$nom',
    '$app','$apm','$fec','$sex','$ema','$car','$gre','$esc','$sem','$enf',
    '$med','$alg','$cem','$tem','$fechaH','2','0')";
    $res =  query($sql);
    if($res) {
      $_SESSION['nombrePG'] = "$nom $app $apm";
      $_SESSION['idUsuarioPG'] = "$idUsuario";
      $_SESSION['tipoPG'] = 2;
      $nombre1 = "$nom $app $apm";
      enviarMailPG($nombre1, $ema, $idUsuario,$regPG);
      header("Location: ../fichaPrimeraGuardia.php");
    }
    else header("Location: ../registroPrimeraGuardia.php?error=0fx001");
  }


  /*if($regPG == 3){
    $idUsuario = newUser();
    echo "<br><br>id = $idUsuario";
    if($idUsuario!='none'){
      $sql = "SELECT * FROM primeraguardia ORDER BY numero DESC";
      $res = query($sql); $row = mysql_num_rows($res);
      if($row!=0){ $cam = mysql_fetch_assoc($res); $numero = $cam['numero']+1; }
      else $numero = 1;
      if($esc == 1) $esc = "UNAM CU";
      if($esc == 2) $esc = "UNAM FESI";
      if($esc == 3) $esc = "UNAM FESZ";
      if($esc == 4) $esc = "IPN ESM";
      if($esc == 5) $esc = "IPN ENMyH";
      if($esc == 6) $esc = "IPN ENCB";
      if($esc == 7) $esc = "IPN CICS";
      if($esc == 8) $esc = "IPN ESEO";
      if($esc == 9) $esc = "UAM Xochimilco";
      if($esc == 10) $esc = "La salle";
      if($esc == 11) $esc = "Justo Sierra";
      if($esc == 12) $esc = "West Hill";
      if($esc == 13) $esc = "UP";
      if($esc == 14) $esc = "Escuela Médico Militar";
      $sql = "INSERT INTO primeraguardia VALUES ('$idUsuario','$numero','$nom',
      '$app','$apm','$fec','$sex','$ema','$car','$gre','$esc','3')";
      $res =  query($sql);
      if($res) {
        $_SESSION['nombrePG'] = "$nom $app $apm";
        $_SESSION['idUsuarioPG'] = "$idUsuario";
        $_SESSION['tipoPG'] = 3;

        header("Location: ../fichaPrimeraGuardia.php?afi=true");
      }
      else header("Location: ../registroPrimeraGuardia.php?error=0fx001");
  }
   else header("Location: ../registroPrimeraGuardia.php?error=0fx001");
}*/
}

function getRecH2($idProy){
  $sql = "SELECT * FROM rhumanos WHERE idProyecto = '$idProy'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row>0){
    echo"<table id='tPP'>
        <tr>
        <th>Nombre</th>
        <th>Cargo</th>
      </tr>
    <tbody>";
    while($cam = mysql_fetch_assoc($res)){
      foreach ($cam as $var => $val) { ${$var} = $val; }
      echo "<tr>
            <td>$nombre</td>
            <td>$cargo</td>
            </tr>";
    }
    echo "</tbody></table>";
  }
  else { echo "<p style='font-size: 15px;'>No hay información al respecto</p>"; }
}


function getAut2($idProy){

  $sql = "SELECT * FROM autorizaciones WHERE idProyecto = '$idProy'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row>0){
    echo "<table id='tPP'>
        <tr>
        <th>Autorización</th>
        <th>Status</th>
      </tr>
    <tbody>";
    while($cam = mysql_fetch_assoc($res)){
      foreach ($cam as $var => $val) { ${$var} = $val; }
      echo "<tr>
            <td>$descripcion</td>
            <td>$status</td>
            </tr>";
    }
    echo "</tbody></table>";
  }
  else { echo "<p style='font-size: 15px;'>No hay información al respecto</p>"; }
}

function getPre2($idProy){
  $sql = "SELECT * FROM presupuesto WHERE idProyecto = '$idProy'";
  $res = queryP($sql);
  $row = mysql_num_rows($res);
  if($row>0){
    echo "<table id='tPP'>
        <tr>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
        <th>Lugar</th>
      </tr>
    <tbody id='tPP'>";
    $gTotal = 0;
    while($cam = mysql_fetch_assoc($res)){
      foreach ($cam as $var => $val) { ${$var} = $val; }
      echo "<tr>
            <td>$descripcion</td>
            <td>$cantidad</td>
            <td>$precio</td>
            <td>$total</td>
            <td>$lugar</td>
            </tr>";
            $gTotal = $gTotal + $total;
    }
    echo "
        </tbody> </table>
        <div id='gTot'>
          <p>TOTAL</p>
          <p>$gTotal</p>
          <div class='clearBoth'></div>
        </div>
      </tr>

    ";
  }
  else { echo "<p style='font-size: 15px;'>No hay información al respecto</p>"; }
}



//ENVIAR CORREO REGISTRO
  function enviarMailRegistro($nombre,$apellidoP,$email,$idUsuario){
    date_default_timezone_set('Etc/UTC');
    require 'phpMailer/PHPMailerAutoload.php';

    $mensaje ="<div id='cuerpo'>
      <p>
        Para finalizar su registro de manera exitosa, favor de seguir los
        siguientes pasos
      </p>
      <p>
        Deposita tu donativo en la cuenta 92-00212923-8 de Santander por la
        cantidad de $100.00 M.N. con la referencia ".'"'.$idUsuario.'"'.".
      </p>
      <p>
        Enviar el comprobante del donativo generado por el banco al correo
        afiliacion@aimeds.org con la referencia como asunto.
      </p>
      <p>
        Esperar el correo de confirmación y nueva contraseña para acceder
        al sitio (2-3 días hábiles a partir del envío del comprobante).
      </p>
      <p>
        Si tienes alguna duda, envía un correo a contacto@aimeds.org<br>
        Nosotros te responderemos a la brevedad.
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
    ";

    $mail = new PHPMailer;
    //$mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'aimeds.org';
    $mail->Port = 25;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => true,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPSecure = 'none';
    $mail->SMTPAuth = true;
    $mail->Username = "afiliacion@aimeds.org";
    $mail->Password = "Afi2016_2";
    $mail->setFrom('afiliacion@aimeds.org', 'Afiliación AIMEDS');
    //$mail->addReplyTo($correo, $nombre);
    $mail->Subject = 'Afiliación';
    $mail->msgHTML($mensaje, dirname(__FILE__));
    $mail->AltBody = $mensaje;
    //$mail->addAttachment('images/phpmailer_mini.png');
    $mail->addAddress("$email", "$nombre $apellidoP");
    if ($mail->send()) { header("Location: ../ficha.php"); }
    else{ header("Location: ../ficha.php");  }
  }


//ENVIAR CORREO PG
function enviarMailPG($nombre1, $email, $idUsuario,$regPG){

  date_default_timezone_set('Etc/UTC');
  require 'phpMailer/PHPMailerAutoload.php';

  $sql = "SELECT * FROM primeraguardia";
  $res = query($sql);
  $row = mysql_num_rows($res);
  //$row = 55;
  if($row<=51){

  if($regPG==1) $precio = "$250.00 M.N.";
  if($regPG==2) $precio = "$400.00 M.N.";

  $fecha = date('Y-m-d');
  $nfecha = strtotime ( '+3 day' , strtotime ( $fecha ) ) ;
  $dia = date('d',$nfecha);
  $mes = date('m',$nfecha) * 1 - 1;

  $meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto',
  'septiempre','octubre','noviembre','diciembre');
  $fechaN = $dia." de ".$meses[$mes];

  $mensaje = "<div id='cuerpo'>
    <p>
    Curso/taller: ¿Qué hacer en mi primera guardia?<br>
    Para finalizar el registro favor de seguir los siguientes pasos.
    </p>
    <p>
      Depositar la cuota de recuperación en la cuenta 92-00212923-8 de Santander
      por la cantidad de $precio con la referencia ".'"'.$idUsuario.'"'."
      antes del día $fechaN
    </p>
    <p>
      Enviar el comprobante generado por el banco al correo
      eventos@aimeds.org con la referencia como asunto.
    </p>
    <p>
      Esperar el correo de confirmación (2-3 días hábiles a partir del
      envío del comprobante).
    </p>
    <p>
      NOTA: Ya que el cupo es limitado te pedimos que deposites la cuota de
      recuperacíon antes del día mencionado, de lo contrario perderás tu lugar.
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
    #cuerpo p:nth-child(5){font-size: 17px;}
    #cuerpo p:nth-child(6){
      font-size: 19px;
      font-weight: bold;
      text-align: center;
      margin-top: 40px;
    }
  </style>
  ";

  $mail = new PHPMailer;
  //$mail->isSMTP();
  $mail->SMTPDebug = 2;
  $mail->Debugoutput = 'html';
  $mail->CharSet = 'UTF-8';
  $mail->Host = 'aimeds.org';
  $mail->Port = 25;
  $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => true,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );
  $mail->SMTPSecure = 'none';
  $mail->SMTPAuth = true;
  $mail->Username = "eventos@aimeds.org";
  $mail->Password = "Eve2016_2";
  $mail->setFrom('eventos@aimeds.org', 'Eventos AIMEDS');
  //$mail->addReplyTo($correo, $nombre);
  $mail->Subject = 'Primera guardia';
  $mail->msgHTML($mensaje, dirname(__FILE__));
  $mail->AltBody = $mensaje;
  //$mail->addAttachment('images/phpmailer_mini.png');
  $mail->addAddress("$email", "$nombre1");
  if ($mail->send()) { header("Location: ../fichaPrimeraGuardia.php");  }
  else{  header("Location: ../fichaPrimeraGuardia.php"); }
}
else {  header("Location: ../fichaPrimeraGuardia.php"); }
}


function getAllP(){
  $sql = "SELECT * FROM responsable WHERE status!=0 ORDER BY numero";
  $res = queryP($sql);
  while($cam=mysql_fetch_assoc($res)){
    foreach ($cam as $var => $val) { ${$var} = $val;  }
    $sql2 = "SELECT * FROM principal WHERE idProyecto='$idProyecto'";
    $res2 = queryP($sql2);  $cam2 = mysql_fetch_assoc($res2);
    foreach ($cam2 as $var => $val) { ${$var} = $val;  }
    echo "
      <tr>
        <td>$idProyecto</td>
        <td>$nombreProyecto</td>
        <td>$fecha1</td>
        <td>
          <a href='reportes.php?id=$idProyecto' id='oRepP'>
            <i class='fa fa-folder-open-o'></i>
          </a>
        </td>
      </tr>
    ";
  }
}


//
//
//
//
//
//
//

//CERRAR SESION
if(isset($_GET['logout'])){
  session_destroy();
  header("Location: ../index.php#afiliados");
}




if(isset($_GET['temp'])){
  $sql = "SELECT * FROM registro WHERE fechaReg = '2016-09-10' OR fechaReg = '2016-09-06'";
  $res = query($sql);
  while ($cam = mysql_fetch_assoc($res)) {
    foreach ($cam as $var => $val) { ${$var} = $val;  }
    $sql1 = "UPDATE login SET fechCaduca = '2016-12-31' WHERE idUsuario = '$idUsuario'";
    $res1 = query($sql1);
    if($res1){
      echo "$idUsuario===>YES<br><br>";
    }
    else{
      echo "$idUsuario===>NOUP<br><br>";
    }
  }
}





?>
