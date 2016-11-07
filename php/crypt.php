<?php

function cryptRS($user, $pass) {
  //PASO #1
  $step1 = ''; $j = strlen($pass);
  for ($i=1; $i<=$j ; $i++) {
    $letra = substr($pass,$i-1,1);
    $num = (ord($letra)) + $i;
    $letra = chr($num);
    $step1 .= $letra;
  }
  $step1 = str_replace(' ','',$step1);
  //PASO #2
  $step2 =  substr($step1,3);
  $step2 .=  substr($step1,0,3);
  //PASO #3
  $user = substr($user,0,3);
  $step3 = "$step2$user";
  //PASO #4
  $x=1;
  while($x==1){
    $num = rand(33, 45);
    if($num != 34 && $num != 39 && $num != 40 && $num != 41 && $num != 44){
      $uno = chr($num);
      $x = 0;
    }
  }
  $x=1;
  while($x==1){
    $num = rand(33, 45);
    if($num != 34 && $num != 39 && $num != 40 && $num != 41 && $num != 44){
      $uno .= chr($num);
      $x = 0;
    }
  }
  $x=1;
  while($x==1){
    $num = rand(33, 45);
    if($num != 34 && $num != 39 && $num != 40 && $num != 41 && $num != 44){
      $dos = chr($num);
      $x = 0;
    }
  }
  $x=1;
  while($x==1){
    $num = rand(33, 45);
    if($num != 34 && $num != 39 && $num != 40 && $num != 41 && $num != 44){
      $dos .= chr($num);
      $x = 0;
    }
  }
  $step4 = "$uno$step3$dos";
  return($step4);
}


function getOPass($passG){
  $pass = substr($passG,2);
  $pass = substr($pass,0,-5);

  $uno = substr($pass,-3);
  $dos = substr($pass,0,-3);

  $pass = "$uno$dos";

  $fPass = ''; $j = strlen($pass);
  for ($i=1; $i<=$j ; $i++) {
    $letra = substr($pass,$i-1,1);
    $num = (ord($letra)) - $i;
    $letra = chr($num);
    $fPass .= $letra;
  }
  $fPass = str_replace(' ','',$fPass);

  return($fPass);

}

if(isset($_GET['getPass'])){
  $user = $_GET['getPass'];
  $sql = "SELECT * FROM login WHERE idUsuario = '$user'";
  $res = query($sql);
  $cam = mysql_fetch_assoc($res);
  $pass = $cam['password'];
  echo getOPass($pass);
}

?>
