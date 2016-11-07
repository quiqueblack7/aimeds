
$("#bReg").click(function(){
  var idP = document.getElementById('fPEM').contentWindow.document.getElementById('sPais').value,
  idE = document.getElementById('fPEM').contentWindow.document.getElementById('sEstado').value,
  idM = document.getElementById('fPEM').contentWindow.document.getElementById('sMun').value,
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  fec = $("#fec").val(), sex = $("#sex").val(), ema = $("#ema").val(),
  car = $("#car").val(), gre = $("#gre").val(), esp = $("#escuelaP").val(),
  appa = $('#checkAPPA').is(":checked");
  if(esp==15)  esp2 = $("#escP2").val()
  else esp2 = 'another';

  if(idP == 0 || idE == 0 || idM == 0 || nom == '' || app == '' || apm == '' || fec == '' || sex == null || ema == '' || car == '' || gre == null || esp == null || appa == false || esp2 == ''){

    alert("Favor de completar todos los campos");
  }
  else{
    $("#fReg").attr("method","POST");
    $("#fReg").attr("action","php/funciones.php?insReg=1&idPais="+idP+"&idEstado="+idE+"&idMunicipio="+idM);
    $("#fReg").submit();
  }
});


$("#escuelaP").change(function(){
  var x = $("#escuelaP").val();
  if(x == 15){
    $("#escP2").css("display","inline");
    $("#escP2").attr("required","true");
  }
  else {
    $("#escP2").css("display","none");
    $("#escP2").removeAttr("required");
  }
});

$("#escuelaP3").change(function(){
  var x = $("#escuelaP3").val();
  if(x == 15){
    $("#escP23").css("display","inline");
    $("#escP23").attr("required","true");
  }
  else {
    $("#escP23").css("display","none");
    $("#escP23").removeAttr("required");
  }
});

$("#sPais").change(function(){
  var idPais = $("#sPais").val();
  window.location.href = "frame.php?obPEM=1&idPais="+idPais;
});

$("#sEstado").change(function(){
  var id = $("#sPais").val();
  var id2 = $("#sEstado").val();
  window.location.href = "frame.php?obPEM=1&idPais="+id+"&idEstado="+id2;
});

$("#imFicha").click(function(){
  window.print();
});
$("#imFicha2").click(function(){
  $(".ficha").css("background","none");
  $(".ficha").css("border","none");
  $(".ficha").css("box-shadow","none");
  $("body").css("background","transparent");
  window.print();
  location.reload();
});

$("#saFicha").click(function(){
  window.location.href = "registro.php";
});

$("#avP").click(function(){
  var W = 0.9*($(window).width());
  var L = ($(window).width() - 0.9*($(window).width()))/2;
  var H = 0.9*($(window).height());
  $("#appa").css("width",W+"px");
  $("#appa").css("height",H+"px");
  $("#appa").css("opacity","1");
  $("#appa").css("z-index",9999);
  $("#appa").css("left",L+"px");
  $("#appa").css("top","30px");
  $("#appa").attr("src","avisoPrivacidad.php");
});

$("#bAP").click(function(){
  var F = window.frameElement;
  $(F).css("z-index",-9999);
  $(F).css("opacity",0);
});

$("#bAP2").click(function(){ close(); });
$("#bPA2").click(function(){ close(); });

$("#poA").click(function(){
  var W = 0.9*($(window).width());
  var L = ($(window).width() - 0.9*($(window).width()))/2;
  var H = 0.9*($(window).height());
  $("#appa").css("width",W+"px");
  $("#appa").css("height",H+"px");
  $("#appa").css("opacity","1");
  $("#appa").css("z-index",9999);
  $("#appa").css("left",L+"px");
  $("#appa").css("top","30px");
  $("#appa").attr("src","politicasAfiliacion.php");
});

$("#bPA").click(function(){
  var F = window.frameElement;
  $(F).css("z-index",-9999);
  $(F).css("opacity",0);
});


function sendMnsMC(){
  $("#mailContacto").submit();
}

$("#mYes").click(function(){
  $("#idAIMEDS").css("display","inline");
  $("#idAIMEDS").attr("required","false");
});
$("#mNo").click(function(){
  $("#idAIMEDS").css("display","none");
  $("#idAIMEDS").removeAttr("required");
});


$("#dirAll").click(function(){
  var x = $('#dirAll').is(':checked');
  if(x == true){
    $('#dirM').prop('checked',true);
    $('#dirN').prop('checked',true);
    $('#dirE').prop('checked',true);
    $('#dirB').prop('checked',true);
    $('#dirOd').prop('checked',true);
    $('#dirOp').prop('checked',true);
    $('#dirP').prop('checked',true);
  }
  else{
    $('#dirM').prop('checked',false);
    $('#dirN').prop('checked',false);
    $('#dirE').prop('checked',false);
    $('#dirB').prop('checked',false);
    $('#dirOd').prop('checked',false);
    $('#dirOp').prop('checked',false);
    $('#dirP').prop('checked',false);
  }
});

$('#dirM').click(function(){
  var x = $('#dirM').is(':checked');
  if(x == false)  $("#dirAll").prop('checked',false);
});

$('#dirE').click(function(){
  var x = $('#dirE').is(':checked');
  if(x == false)  $("#dirAll").prop('checked',false);
});

$('#dirN').click(function(){
  var x = $('#dirN').is(':checked');
  if(x == false)  $("#dirAll").prop('checked',false);
});
$('#dirB').click(function(){
  var x = $('#dirB').is(':checked');
  if(x == false)  $("#dirAll").prop('checked',false);
});
$('#dirOd').click(function(){
  var x = $('#dirOd').is(':checked');
  if(x == false)  $("#dirAll").prop('checked',false);
});
$('#dirOp').click(function(){
  var x = $('#dirOp').is(':checked');
  if(x == false)  $("#dirAll").prop('checked',false);
});
$('#dirP').click(function(){
  var x = $('#dirP').is(':checked');
  if(x == false)  $("#dirAll").prop('checked',false);
});

$('#dirOt').click(function(){
  var x = $('#dirOt').is(':checked');
  if(x == true) $('#dirOtText').css('opacity','1');
  if(x == false) $('#dirOtText').css('opacity','0');
});

$("#chaDate").click(function(){
  var alt = $("#chaDate").attr("alt");
  if(alt==1){
    $("#chaDate").html("Cambiar a fecha única");
    $("#chaDate").attr("alt",'2');
    $("#fech2").css("display",'inline');
    $("#guion").css("display",'inline');
  }
  if(alt==2){
    $("#chaDate").html("Cambiar a periodo");
    $("#chaDate").attr("alt",'1');
    $("#fech2").css("display",'none');
    $("#fech2").val('');
    $("#guion").css("display",'none');
  }
});

$('#cPF').click(function(){
  var x = $('#cPF').is(':checked');
  if(x == true) $('#pubFis').css('opacity','1');
  if(x == false) $('#pubFis').css('opacity','0');
});

$('#cPRS').click(function(){
  var x = $('#cPRS').is(':checked');
  if(x == true) $('#pubRS').css('opacity','1');
  if(x == false) $('#pubRS').css('opacity','0');
});

$("#bMostrar1").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  cor = $("#cor").val(), tel = $("#tel").val(), car = $("#car").val(),
  gre = $("#gre").val(), esp = $("#escuelaP").val();

  if($('#mYes').is(':checked')) { var miem = 1, idAIMEDS =  $("#idAIMEDS").val(); }
  else if($('#mNo').is(':checked')) { var miem = 0, idAIMEDS = 'none';  }
  else { var miem = 'none', idAIMEDS = ''; }

  if(esp==15){ esp2 = $("#escP2").val(); }
  else { esp2 = 'none'; }

  if(nom==''||app==''||apm==''||cor==''||tel==''||car==''||gre==null||esp==null||miem=='none'||idAIMEDS==''||esp2=='')
    alert("Favor de completar todos los campos");
  else{
  var link = "frame.php?fPart1=true&nom="+nom+"&app="+app+"&apm="+apm+"&cor="+cor;
  link += "&tel="+tel+"&car="+car+"&gre="+gre+"&esp="+esp+"&miem="+miem;
  link += "&idAIMEDS="+idAIMEDS+"&esp2="+esp2;
  $("#fFPro").attr("src",link);
  $("#fPart2").css("display","inline");
  $("#bMostrar1").css("display","none");
  }
  var T = $("#bMostrar2").position().top;
  $("#contProy").css("height",T+20+"px");
});

$("#bMostrar2").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  cor = $("#cor").val(), tel = $("#tel").val(), car = $("#car").val(),
  gre = $("#gre").val(), esp = $("#escuelaP").val();

  if($('#mYes').is(':checked')) { var miem = 1, idAIMEDS =  $("#idAIMEDS").val(); }
  else if($('#mNo').is(':checked')) { var miem = 0, idAIMEDS = 'none';  }
  else { var miem = 'none', idAIMEDS = ''; }

  if(esp==15){ esp2 = $("#escP2").val(); }
  else { esp2 = 'none'; }

  if(nom==''||app==''||apm==''||cor==''||tel==''||car==''||gre==null||esp==null||miem=='none'||idAIMEDS==''||esp2=='')
    alert("Favor de completar todos los campos");
  else{
  var link = "frame.php?saveTemp=true&nom="+nom+"&app="+app+"&apm="+apm+"&cor="+cor;
  link += "&tel="+tel+"&car="+car+"&gre="+gre+"&esp="+esp+"&miem="+miem;
  link += "&idAIMEDS="+idAIMEDS+"&esp2="+esp2;
  }
  var nomP = $("#nomP").val(), jus = $("#jus").val();

  if($('#rEst').is(':checked'))  var pob = $('#rEst').val();
  if($('#rPro').is(':checked'))  var pob = $('#rPro').val();
  if($('#rTodas').is(':checked'))  var pob = $('#rTodas').val();

  if($('#dirAll').is(':checked')) var dirAll=$('#dirAll').val();
  else{
    dirAll = 0;
    if($('#dirM').is(':checked')) var dirM=$('#dirM').val(); else dirM = 0;
    if($('#dirE').is(':checked')) var dirE=$('#dirE').val(); else dirE = 0;
    if($('#dirN').is(':checked')) var dirN=$('#dirN').val(); else dirN = 0;
    if($('#dirB').is(':checked')) var dirB=$('#dirB').val(); else dirB = 0;
    if($('#dirOd').is(':checked')) var dirOd=$('#dirOd').val(); else dirOd = 0;
    if($('#dirOp').is(':checked')) var dirOp=$('#dirOp').val(); else dirOp = 0;
    if($('#dirP').is(':checked')) var dirP=$('#dirP').val(); else dirP = 0;
  }
    if($('#dirOt').is(':checked')) var dirOt=$('#dirOt').val(); else dirOt = 0
  var fech1 = $("#fech1").val(), fech2 = $("#fech2").val();

  var lProb = $("#lProb").val(), pTrab = $("#pTrab").val();

  link += "&nomP="+nomP+"&jus="+jus+"&pob="+pob;
  link += "&fech1="+fech1+"&fech2="+fech2+"&lProb="+lProb+"&pTrab="+pTrab;
  link += "&dirM="+dirM+"&dirE="+dirE+"&dirN="+dirN+"&dirB="+dirB+"&dirOd="+dirOd;
  link += "&dirOp="+dirOp+"&dirP="+dirP+"&dirOt="+dirOt+"&dirAll="+dirAll;

  $("#fFPro").attr("src",link);

  $("#fPart3").css("display","inline");
  $("#bMostrar2").css("display","none");

  var T = $("#bMostrar3").position().top;
  $("#contProy").css("height",T+20+"px");
});

$("#bMostrar3").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  cor = $("#cor").val(), tel = $("#tel").val(), car = $("#car").val(),
  gre = $("#gre").val(), esp = $("#escuelaP").val();

  if($('#mYes').is(':checked')) { var miem = 1, idAIMEDS =  $("#idAIMEDS").val(); }
  else if($('#mNo').is(':checked')) { var miem = 0, idAIMEDS = 'none';  }
  else { var miem = 'none', idAIMEDS = ''; }

  if(esp==15){ esp2 = $("#escP2").val(); }
  else { esp2 = 'none'; }

  if(nom==''||app==''||apm==''||cor==''||tel==''||car==''||gre==null||esp==null||miem=='none'||idAIMEDS==''||esp2=='')
    alert("Favor de completar todos los campos");
  else{
  var link = "frame.php?saveTemp=true&nom="+nom+"&app="+app+"&apm="+apm+"&cor="+cor;
  link += "&tel="+tel+"&car="+car+"&gre="+gre+"&esp="+esp+"&miem="+miem;
  link += "&idAIMEDS="+idAIMEDS+"&esp2="+esp2;
  }
  var nomP = $("#nomP").val(), jus = $("#jus").val();

  if($('#rEst').is(':checked'))  var pob = $('#rEst').val();
  if($('#rPro').is(':checked'))  var pob = $('#rPro').val();
  if($('#rTodas').is(':checked'))  var pob = $('#rTodas').val();

  if($('#dirAll').is(':checked')) var dirAll=$('#dirAll').val();
  else{
    dirAll = 0;
    if($('#dirM').is(':checked')) var dirM=$('#dirM').val(); else dirM = 0;
    if($('#dirE').is(':checked')) var dirE=$('#dirE').val(); else dirE = 0;
    if($('#dirN').is(':checked')) var dirN=$('#dirN').val(); else dirN = 0;
    if($('#dirB').is(':checked')) var dirB=$('#dirB').val(); else dirB = 0;
    if($('#dirOd').is(':checked')) var dirOd=$('#dirOd').val(); else dirOd = 0;
    if($('#dirOp').is(':checked')) var dirOp=$('#dirOp').val(); else dirOp = 0;
    if($('#dirP').is(':checked')) var dirP=$('#dirP').val(); else dirP = 0;
  }
    if($('#dirOt').is(':checked')) var dirOt=$('#dirOt').val(); else dirOt = 0
  var fech1 = $("#fech1").val(), fech2 = $("#fech2").val();

  var lProb = $("#lProb").val(), pTrab = $("#pTrab").val();

  link += "&nomP="+nomP+"&jus="+jus+"&pob="+pob;
  link += "&fech1="+fech1+"&fech2="+fech2+"&lProb="+lProb+"&pTrab="+pTrab;
  link += "&dirM="+dirM+"&dirE="+dirE+"&dirN="+dirN+"&dirB="+dirB+"&dirOd="+dirOd;
  link += "&dirOp="+dirOp+"&dirP="+dirP+"&dirOt="+dirOt+"&dirAll="+dirAll;

  if($('#cPF').is(':checked')){
    var dPF = $("#pubFis").val();
    link += "&pubF=1&dPF="+dPF;
  }
  if($('#cPRS').is(':checked')){
    var dPRS = $("#pubRS").val();
    link += "&pubRS=1&dPRS="+dPRS;
  }
  $("#fFPro").attr("src",link);

  var x = confirm("¿Seguro que deseas terminar?\nRecuerda que puedes editar tu proyecto cuantas veces quieras");
  if(x==true){ window.location.href='fichaProyecto.php'; }
});



$("#addObj").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  cor = $("#cor").val(), tel = $("#tel").val(), car = $("#car").val(),
  gre = $("#gre").val(), esp = $("#escuelaP").val();

  if($('#mYes').is(':checked')) { var miem = 1, idAIMEDS =  $("#idAIMEDS").val(); }
  else if($('#mNo').is(':checked')) { var miem = 0, idAIMEDS = 'none';  }
  else { var miem = 'none', idAIMEDS = ''; }

  if(esp==15){ esp2 = $("#escP2").val(); }
  else { esp2 = 'none'; }


  var link = "frame.php?saveTemp=true&nom="+nom+"&app="+app+"&apm="+apm+"&cor="+cor;
  link += "&tel="+tel+"&car="+car+"&gre="+gre+"&esp="+esp+"&miem="+miem;
  link += "&idAIMEDS="+idAIMEDS+"&esp2="+esp2;


  var nomP = $("#nomP").val(), jus = $("#jus").val();

  if($('#rEst').is(':checked'))  var pob = $('#rEst').val();
  if($('#rPro').is(':checked'))  var pob = $('#rPro').val();
  if($('#rTodas').is(':checked'))  var pob = $('#rTodas').val();

  if($('#dirAll').is(':checked')) var dirAll=$('#dirAll').val();
  else{
    dirAll = 0;
    if($('#dirM').is(':checked')) var dirM=$('#dirM').val(); else dirM = 0;
    if($('#dirE').is(':checked')) var dirE=$('#dirE').val(); else dirE = 0;
    if($('#dirN').is(':checked')) var dirN=$('#dirN').val(); else dirN = 0;
    if($('#dirB').is(':checked')) var dirB=$('#dirB').val(); else dirB = 0;
    if($('#dirOd').is(':checked')) var dirOd=$('#dirOd').val(); else dirOd = 0;
    if($('#dirOp').is(':checked')) var dirOp=$('#dirOp').val(); else dirOp = 0;
    if($('#dirP').is(':checked')) var dirP=$('#dirP').val(); else dirP = 0;
  }
    if($('#dirOt').is(':checked')) var dirOt=$('#dirOt').val(); else dirOt = 0
  var fech1 = $("#fech1").val(), fech2 = $("#fech2").val();

  var lProb = $("#lProb").val(), pTrab = $("#pTrab").val();

  link += "&nomP="+nomP+"&jus="+jus+"&pob="+pob;
  link += "&fech1="+fech1+"&fech2="+fech2+"&lProb="+lProb+"&pTrab="+pTrab;
  link += "&dirM="+dirM+"&dirE="+dirE+"&dirN="+dirN+"&dirB="+dirB+"&dirOd="+dirOd;
  link += "&dirOp="+dirOp+"&dirP="+dirP+"&dirOt="+dirOt+"&dirAll="+dirAll;

  if($('#cPF').is(':checked')){
    var dPF = $("#pubFis").val();
    link += "&pubF=1&dPF="+dPF;
  }
  if($('#cPRS').is(':checked')){
    var dPRS = $("#pubRS").val();
    link += "&pubRS=1&dPRS="+dPRS;
  }


  $("#fFPro").attr("src",link);

  var W = ($(window).width()/2)-(450/2);
  var H = (screen.height/2) + 250;

  $("#addObjetivo").css('opacity','1');
  $("#addObjetivo").css('top',H+"px");
  $("#addObjetivo").css('left',W+"px");
  $("#addObjetivo").css('z-index',99);
  $("#contProy").css("opacity","0.1");

});

$("#sendObj").click(function(){
  var desc = $("#descObj").val();
  if(desc=='') alert("Campo vacío, favor de escribir");
  else  window.location.href = "../php/funciones.php?addObj=true&desc="+desc;
});

$("#closeObj").click(function(){
  $("#addObjetivo").css("opacity",0);
  $("#addObjetivo").css("z-index",-99);
  $("#contProy").css("opacity",1);
});

$("#addRH").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  cor = $("#cor").val(), tel = $("#tel").val(), car = $("#car").val(),
  gre = $("#gre").val(), esp = $("#escuelaP").val();

  if($('#mYes').is(':checked')) { var miem = 1, idAIMEDS =  $("#idAIMEDS").val(); }
  else if($('#mNo').is(':checked')) { var miem = 0, idAIMEDS = 'none';  }
  else { var miem = 'none', idAIMEDS = ''; }

  if(esp==15){ esp2 = $("#escP2").val(); }
  else { esp2 = 'none'; }


  var link = "frame.php?saveTemp=true&nom="+nom+"&app="+app+"&apm="+apm+"&cor="+cor;
  link += "&tel="+tel+"&car="+car+"&gre="+gre+"&esp="+esp+"&miem="+miem;
  link += "&idAIMEDS="+idAIMEDS+"&esp2="+esp2;

  var nomP = $("#nomP").val(), jus = $("#jus").val();

  if($('#rEst').is(':checked'))  var pob = $('#rEst').val();
  if($('#rPro').is(':checked'))  var pob = $('#rPro').val();
  if($('#rTodas').is(':checked'))  var pob = $('#rTodas').val();

  if($('#dirAll').is(':checked')) var dirAll=$('#dirAll').val();
  else{
    dirAll = 0;
    if($('#dirM').is(':checked')) var dirM=$('#dirM').val(); else dirM = 0;
    if($('#dirE').is(':checked')) var dirE=$('#dirE').val(); else dirE = 0;
    if($('#dirN').is(':checked')) var dirN=$('#dirN').val(); else dirN = 0;
    if($('#dirB').is(':checked')) var dirB=$('#dirB').val(); else dirB = 0;
    if($('#dirOd').is(':checked')) var dirOd=$('#dirOd').val(); else dirOd = 0;
    if($('#dirOp').is(':checked')) var dirOp=$('#dirOp').val(); else dirOp = 0;
    if($('#dirP').is(':checked')) var dirP=$('#dirP').val(); else dirP = 0;
  }
    if($('#dirOt').is(':checked')) var dirOt=$('#dirOt').val(); else dirOt = 0
  var fech1 = $("#fech1").val(), fech2 = $("#fech2").val();

  var lProb = $("#lProb").val(), pTrab = $("#pTrab").val();

  link += "&nomP="+nomP+"&jus="+jus+"&pob="+pob;
  link += "&fech1="+fech1+"&fech2="+fech2+"&lProb="+lProb+"&pTrab="+pTrab;
  link += "&dirM="+dirM+"&dirE="+dirE+"&dirN="+dirN+"&dirB="+dirB+"&dirOd="+dirOd;
  link += "&dirOp="+dirOp+"&dirP="+dirP+"&dirOt="+dirOt+"&dirAll="+dirAll;

  if($('#cPF').is(':checked')){
    var dPF = $("#pubFis").val();
    link += "&pubF=1&dPF="+dPF;
  }
  if($('#cPRS').is(':checked')){
    var dPRS = $("#pubRS").val();
    link += "&pubRS=1&dPRS="+dPRS;
  }
  $("#fFPro").attr("src",link);


  var W = ($(window).width()/2)-(450/2);
  var H = (screen.height/2) + 250;

  $("#addPersona").css('opacity','1');
  $("#addPersona").css('top',H+"px");
  $("#addPersona").css('left',W+"px");
  $("#addPersona").css('z-index',99);
  $("#contProy").css("opacity","0.1");
});

$("#sendPer").click(function(){
  var nomRH = $("#nomRH").val(), carRH = $("#carRH").val();
  if(nomRH==''||carRH=='') alert("Favor de llenar ambos datos");
  else  window.location.href = "../php/funciones.php?addPer=true&nomRH="+nomRH+"&carRH="+carRH;
});

$("#closePer").click(function(){
  $("#addPersona").css("opacity",0);
  $("#addPersona").css("z-index",-99);
  $("#contProy").css("opacity",1);
});


$("#addAut").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  cor = $("#cor").val(), tel = $("#tel").val(), car = $("#car").val(),
  gre = $("#gre").val(), esp = $("#escuelaP").val();

  if($('#mYes').is(':checked')) { var miem = 1, idAIMEDS =  $("#idAIMEDS").val(); }
  else if($('#mNo').is(':checked')) { var miem = 0, idAIMEDS = 'none';  }
  else { var miem = 'none', idAIMEDS = ''; }

  if(esp==15){ esp2 = $("#escP2").val(); }
  else { esp2 = 'none'; }


  var link = "frame.php?saveTemp=true&nom="+nom+"&app="+app+"&apm="+apm+"&cor="+cor;
  link += "&tel="+tel+"&car="+car+"&gre="+gre+"&esp="+esp+"&miem="+miem;
  link += "&idAIMEDS="+idAIMEDS+"&esp2="+esp2;

  var nomP = $("#nomP").val(), jus = $("#jus").val();

  if($('#rEst').is(':checked'))  var pob = $('#rEst').val();
  if($('#rPro').is(':checked'))  var pob = $('#rPro').val();
  if($('#rTodas').is(':checked'))  var pob = $('#rTodas').val();

  if($('#dirAll').is(':checked')) var dirAll=$('#dirAll').val();
  else{
    dirAll = 0;
    if($('#dirM').is(':checked')) var dirM=$('#dirM').val(); else dirM = 0;
    if($('#dirE').is(':checked')) var dirE=$('#dirE').val(); else dirE = 0;
    if($('#dirN').is(':checked')) var dirN=$('#dirN').val(); else dirN = 0;
    if($('#dirB').is(':checked')) var dirB=$('#dirB').val(); else dirB = 0;
    if($('#dirOd').is(':checked')) var dirOd=$('#dirOd').val(); else dirOd = 0;
    if($('#dirOp').is(':checked')) var dirOp=$('#dirOp').val(); else dirOp = 0;
    if($('#dirP').is(':checked')) var dirP=$('#dirP').val(); else dirP = 0;
  }
    if($('#dirOt').is(':checked')) var dirOt=$('#dirOt').val(); else dirOt = 0
  var fech1 = $("#fech1").val(), fech2 = $("#fech2").val();

  var lProb = $("#lProb").val(), pTrab = $("#pTrab").val();

  link += "&nomP="+nomP+"&jus="+jus+"&pob="+pob;
  link += "&fech1="+fech1+"&fech2="+fech2+"&lProb="+lProb+"&pTrab="+pTrab;
  link += "&dirM="+dirM+"&dirE="+dirE+"&dirN="+dirN+"&dirB="+dirB+"&dirOd="+dirOd;
  link += "&dirOp="+dirOp+"&dirP="+dirP+"&dirOt="+dirOt+"&dirAll="+dirAll;

  if($('#cPF').is(':checked')){
    var dPF = $("#pubFis").val();
    link += "&pubF=1&dPF="+dPF;
  }
  if($('#cPRS').is(':checked')){
    var dPRS = $("#pubRS").val();
    link += "&pubRS=1&dPRS="+dPRS;
  }
  $("#fFPro").attr("src",link);


  var W = ($(window).width()/2)-(450/2);
  var H = (screen.height/2) + 250;

  $("#addAuto").css('opacity','1');
  $("#addAuto").css('top',H+"px");
  $("#addAuto").css('left',W+"px");
  $("#addAuto").css('z-index',99);
  $("#contProy").css("opacity","0.1");
});

$("#addPres").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  cor = $("#cor").val(), tel = $("#tel").val(), car = $("#car").val(),
  gre = $("#gre").val(), esp = $("#escuelaP").val();

  if($('#mYes').is(':checked')) { var miem = 1, idAIMEDS =  $("#idAIMEDS").val(); }
  else if($('#mNo').is(':checked')) { var miem = 0, idAIMEDS = 'none';  }
  else { var miem = 'none', idAIMEDS = ''; }

  if(esp==15){ esp2 = $("#escP2").val(); }
  else { esp2 = 'none'; }


  var link = "frame.php?saveTemp=true&nom="+nom+"&app="+app+"&apm="+apm+"&cor="+cor;
  link += "&tel="+tel+"&car="+car+"&gre="+gre+"&esp="+esp+"&miem="+miem;
  link += "&idAIMEDS="+idAIMEDS+"&esp2="+esp2;

  var nomP = $("#nomP").val(), jus = $("#jus").val();

  if($('#rEst').is(':checked'))  var pob = $('#rEst').val();
  if($('#rPro').is(':checked'))  var pob = $('#rPro').val();
  if($('#rTodas').is(':checked'))  var pob = $('#rTodas').val();

  if($('#dirAll').is(':checked')) var dirAll=$('#dirAll').val();
  else{
    dirAll = 0;
    if($('#dirM').is(':checked')) var dirM=$('#dirM').val(); else dirM = 0;
    if($('#dirE').is(':checked')) var dirE=$('#dirE').val(); else dirE = 0;
    if($('#dirN').is(':checked')) var dirN=$('#dirN').val(); else dirN = 0;
    if($('#dirB').is(':checked')) var dirB=$('#dirB').val(); else dirB = 0;
    if($('#dirOd').is(':checked')) var dirOd=$('#dirOd').val(); else dirOd = 0;
    if($('#dirOp').is(':checked')) var dirOp=$('#dirOp').val(); else dirOp = 0;
    if($('#dirP').is(':checked')) var dirP=$('#dirP').val(); else dirP = 0;
  }
    if($('#dirOt').is(':checked')) var dirOt=$('#dirOt').val(); else dirOt = 0
  var fech1 = $("#fech1").val(), fech2 = $("#fech2").val();

  var lProb = $("#lProb").val(), pTrab = $("#pTrab").val();

  link += "&nomP="+nomP+"&jus="+jus+"&pob="+pob;
  link += "&fech1="+fech1+"&fech2="+fech2+"&lProb="+lProb+"&pTrab="+pTrab;
  link += "&dirM="+dirM+"&dirE="+dirE+"&dirN="+dirN+"&dirB="+dirB+"&dirOd="+dirOd;
  link += "&dirOp="+dirOp+"&dirP="+dirP+"&dirOt="+dirOt+"&dirAll="+dirAll;

  if($('#cPF').is(':checked')){
    var dPF = $("#pubFis").val();
    link += "&pubF=1&dPF="+dPF;
  }
  if($('#cPRS').is(':checked')){
    var dPRS = $("#pubRS").val();
    link += "&pubRS=1&dPRS="+dPRS;
  }
  $("#fFPro").attr("src",link);


  var W = ($(window).width()/2)-(450/2);
  var H = (screen.height/2) + 250;

  $("#addPresu").css('opacity','1');
  $("#addPresu").css('top',H+"px");
  $("#addPresu").css('left',W+"px");
  $("#addPresu").css('z-index',99);
  $("#contProy").css("opacity","0.1");
});

$("#sendAuto").click(function(){
  var nomAut = $("#nomAut").val();
  if(nomAut=='') alert("Favor de llenar el campo");
  else  window.location.href = "../php/funciones.php?addAut=true&nomAut="+nomAut;
});

$("#closeAuto").click(function(){
  $("#addAuto").css("opacity",0);
  $("#addAuto").css("z-index",-99);
  $("#contProy").css("opacity",1);
});

$("#sendPres").click(function(){
  var  desP = $("#desP").val(), canP = $("#canP").val(), preP = $("#preP").val(),
  lugP = $("#lugP").val();
  if(desP==''|| canP==''|| preP==''|| lugP=='') alert("Favor de llenar todos los campos");
  else  window.location.href = "../php/funciones.php?addMat=true&desP="+desP+"&canP="+canP+"&preP="+preP+"&lugP="+lugP;
});

$("#closePres").click(function(){
  $("#addPresu").css("opacity",0);
  $("#addPresu").css("z-index",-99);
  $("#contProy").css("opacity",1);
});

$("#solBeca").click(function(){
  var x = confirm("¿Seguro que deseas solicitar la beca?")
  if(x==true){
    window.location.href='../php/funciones.php?solBeca=true';
  }
});


$("#salirU").click(function(){
  var x = confirm("¿Esta seguro que desea salir?");
  if(x==true){
    window.location.href='../php/funciones.php?logout=true';
  }
  });

$("#opDer").click(function(){
  $("#opDer").css("background","#f2f2f2");
  $("#opIzq").css("background","#cccccc");
  $("#opDer").css("color","#000");
  $("#opIzq").css("color","#18a5b7");
  var H = $("#beneficiosA").css("height");
  $("#miAct").css("height",H);
  $("#beneficiosA").css("display","none");
  $("#miAct").css("display","inline");

});

$("#opIzq").click(function(){
  $("#opDer").css("background","#cccccc");
  $("#opIzq").css("background","#f2f2f2");
  $("#opDer").css("color","#18a5b7");
  $("#opIzq").css("color","#000");
  $("#beneficiosA").css("display","inline");
  $("#miAct").css("display","none");
});

$("#btnReg1").click(function(){
  $("#divReg1").css("display", "inline");
  $("#divReg2").css("display", "none");
  $("#divReg3").css("display", "none");
  $("#btnReg1").addClass('actBtnPG');
  $("#btnReg2").removeClass('actBtnPG');
  $("#btnReg3").removeClass('actBtnPG');
  $(".prom").css("color","#000");
  $("#errPG").css("opacity","0");
  $("#errPG").css("z-index","-99");
});

$("#btnReg2").click(function(){
  $("#divReg2").css("display", "inline");
  $("#divReg1").css("display", "none");
  $("#divReg3").css("display", "none");
  $("#btnReg2").addClass('actBtnPG');
  $("#btnReg1").removeClass('actBtnPG');
  $("#btnReg3").removeClass('actBtnPG');
  $(".prom").css("color","#000");
  $("#errPG").css("opacity","0");
  $("#errPG").css("z-index","-99");
});

$("#btnReg3").click(function(){
  $("#divReg3").css("display", "inline");
  $("#divReg2").css("display", "none");
  $("#divReg1").css("display", "none");
  $("#btnReg3").addClass('actBtnPG');
  $("#btnReg2").removeClass('actBtnPG');
  $("#btnReg1").removeClass('actBtnPG');
  $(".prom").css("color","#fff");
  $("#errPG").css("opacity","0");
  $("#errPG").css("z-index","-99");
});

$("#enfS").click(function(){ $("#enf2").css("display","inline"); });
$("#enfN").click(function(){ $("#enf2").css("display","none"); });
$("#medS").click(function(){ $("#med2").css("display","inline"); });
$("#medN").click(function(){ $("#med2").css("display","none"); });
$("#algS").click(function(){ $("#alg2").css("display","inline"); });
$("#algN").click(function(){ $("#alg2").css("display","none"); });

$("#enf2S").click(function(){ $("#enf22").css("display","inline"); });
$("#enf2N").click(function(){ $("#enf22").css("display","none"); });
$("#med2S").click(function(){ $("#med22").css("display","inline"); });
$("#med2N").click(function(){ $("#med22").css("display","none"); });
$("#alg2S").click(function(){ $("#alg22").css("display","inline"); });
$("#alg2N").click(function(){ $("#alg22").css("display","none"); });

$("#btnSub1").click(function(){
  var idU = $("#idUsuario").val(), sem = $("#sem").val(),
  cem = $("#cem").val(), tem = $("#tem").val(),enf='',med='',alg='';
  if($('#enfS').is(':checked')) { enf = $("#enf2").val() }
  if($('#enfN').is(':checked')) { enf = "Ninguna" }
  if($('#medS').is(':checked')) { med = $("#med2").val(); }
  if($('#medN').is(':checked')) { med = "Ninguno"; }
  if($('#algS').is(':checked')) { alg = $("#alg2").val(); }
  if($('#algN').is(':checked')) { alg = "Ninguna"; }

  if(idU==''||sem==''||cem==''||tem==''||enf==''||med==''||alg=='') alert("favor de llenar todos los datos");
  else {
    link = 'php/funciones.php?regPG=1&idUsuario='+idU+"&sem="+sem+"&cem="+cem;
    link += "&tem="+tem+"&enf="+enf+"&med="+med+"&alg="+alg;
    window.location.href = link;
  }
});

$("#btnSub2").click(function(){
  var
  nom = $("#nom").val(), app = $("#app").val(), apm = $("#apm").val(),
  fec = $("#fec").val(), sex = $("#sex").val(), ema = $("#ema").val(),
  car = $("#car").val(), gre = $("#gre").val(), escuelaP = $("#escuelaP").val(),
  enf = '', med = '', alg = '', cem = $("#cem2").val(), tem = $("#tem2").val(),
  sem = $("#sem2").val();

  if($('#enf2S').is(':checked')) { enf = $("#enf22").val() }
  if($('#enf2N').is(':checked')) { enf = "Ninguna" }
  if($('#med2S').is(':checked')) { med = $("#med22").val(); }
  if($('#med2N').is(':checked')) { med = "Ninguno"; }
  if($('#alg2S').is(':checked')) { alg = $("#alg22").val(); }
  if($('#alg2N').is(':checked')) { alg = "Ninguna"; }

  if(escuelaP==15){ escuelaP = $("#escP2").val(); }
  if(nom==''||app==''||apm==''||fec==''||sex==null||ema==''||car==''||gre==null||escuelaP==null||sem==''||cem==''||tem==''||enf==''||med==''||alg=='')
    alert ("Favor de llenar todos los campos");
  else {
    link = 'php/funciones.php?regPG=2&nom='+nom+'&app='+app+'&apm='+apm+'&fec=';
    link += fec+'&sex='+sex+'&ema='+ema+'&car='+car+'&gre='+gre+'&esc='+escuelaP;
    link += "&sem="+sem+"&cem="+cem+"&tem="+tem+"&enf="+enf+"&med="+med+"&alg="+alg;
    window.location.href = link;
  }
});

$("#btnSub3").click(function(){
  var
  idP = document.getElementById('fPEM').contentWindow.document.getElementById('sPais').value,
  idE = document.getElementById('fPEM').contentWindow.document.getElementById('sEstado').value,
  idM = document.getElementById('fPEM').contentWindow.document.getElementById('sMun').value,
  nom = $("#nom3").val(), app = $("#app3").val(), apm = $("#apm3").val(),
  fec = $("#fec3").val(), sex = $("#sex3").val(), ema = $("#ema3").val(),
  car = $("#car3").val(), gre = $("#gre3").val(), escuelaP = $("#escuelaP3").val(),
  appa = $('#checkAPPA').is(":checked");

  if(escuelaP==15){ escuelaP = $("#escP23").val(); }
  if(nom==''||app==''||apm==''||fec==''||sex==null||ema==''||car==''||gre==null||escuelaP==null||idP==0||idE==0||idM==0||appa==false)
    alert ("Favor de llenar todos los campos");
  else {
    link = 'php/funciones.php?regPG=3&nom='+nom+'&app='+app+'&apm='+apm+'&fec=';
    link += fec+'&sex='+sex+'&ema='+ema+'&car='+car+'&gre='+gre+'&esc='+escuelaP;
    link += "&idP="+idP+"&idE="+idE+"&idM="+idM;
    window.location.href = link;
  }
});

$("#printFP").click(function(){
  $("#menuFicha").css("display","none");
  $(".bodyProy").css("background","#ffffff");
  $("#p1FP").css("color","#000");
  $("#cuerpo").css("background","#fff");
  window.print();
  window.location.reload();
});
$("#exitFP").click(function(){ window.location.href="../php/funciones.php?closeProy=1"; });

$("#sendP").click(function(){
  var idP = $("#idProy").val();
  if(idP=='') alert("Favor de introducir el ID del proyecto");
  else
  window.location.href='../php/funciones.php?proyExis=1&idProy='+idP;
});

$(window).resize(function(){
  if($("#tPG1").length){
    var W =  $("#tPG2").width();
    $("#tPG1").width(W);
  }
});
