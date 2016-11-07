function hideMsg(){
  setTimeout(function(){ $("#mnsC").css("opacity","0"); }, 3500);
}

function propOn(x,y){
  if (x==1){
    $("#mYes").prop("checked",true);
    $("#mNo").prop("checked",false);
    $("#idAIMEDS").css("display","inline");
    $("#idAIMEDS").val(y);
  }
  else{
    $("#mNo").prop("checked",true);
    $("#mYes").prop("checked",false);
  }
}

function propOn2(pob){
    if(pob==1){
      $("#rEst").prop("checked",true);
      $("#rPro").prop("checked",false);
      $("#rTodas").prop("checked",false);
    }
    if(pob==2){
      $("#rEst").prop("checked",false);
      $("#rPro").prop("checked",true);
      $("#rTodas").prop("checked",false);
    }
    if(pob==3){
      $("#rEst").prop("checked",false);
      $("#rPro").prop("checked",false);
      $("#rTodas").prop("checked",true);
    }
}

function espOtra(x){
  $("#escP2").css("display","inline");
}

function elimObj(id,x){
  var x = confirm("Seguro que desea eliminar el objetivo #"+x);
  if(x==true){
    window.location.href = "../php/funciones.php?elimObj=true&idObjetivo="+id;
  }
}

function elimRH(id,nom){
  var x = confirm("Seguro que desea eliminar a "+nom);
  if(x==true){
    window.location.href = "../php/funciones.php?elimRH=true&idRH="+id;
  }
}

function elimAut(id){
  var x = confirm("¿Seguro que desea eliminar la autorización?");
  if(x==true){
    window.location.href = "../php/funciones.php?elimAut=true&idAut="+id;
  }
}

function elimPre(id){
  var x = confirm("¿Seguro que desea eliminar el material?");
  if(x==true){
    window.location.href = "../php/funciones.php?elimMat=true&idP="+id;
  }
}

function show2nd(){
  $("#fPart2").css("display","inline");
  $("#bMostrar1").css("display","none");
  var T = $("#bMostrar2").position().top;
  $("#contProy").css("height",T+20+"px");
}

function show3rd(){
  $("#fPart3").css("display","inline");
    $("#contProy").css("height","2050px");
  $("#bMostrar2").css("display","none");
  var T = $("#bMostrar3").position().top;
  $("#contProy").css("height",T+20+"px");
}

function colorMsnjError(){
  $("#mnsjError").css("background","rgba(128, 3, 3, 0.78)");
  $("#mnsjError").css("color","#fff");
  $("#mnsjError").css("width","100%");
  $("#mnsjError").css("text-align","center");
}

function changeBodyEv(){
    $("#bodyEventos").css("background-image", "url(images/fondo2.jpg)");
}

function changeBody(x){
  if(x==1) $("body").css("background-image", "url(images/fondo2.jpg)");
}

function tabPG(){
  if($("#tPG1").length){
    var W =  $("#tPG2").width();
    $("#tPG1").width(W);
  }
}

function showFis(){
  $("#cPF").prop("checked",true);
  $("#pubFis").css("opacity","1");
}

function showRed(){
  $("#cPRS").prop("checked",true);
  $("#pubRS").css("opacity","1");
}
function moveButt(x){
  if(x=='obj1') { $("#addObj").css("margin","-27px 0px 0px 0");  }
  if(x=='obj2') { $("#addObj").css("margin","15px 311px 0px 0");  }

  if(x=='rech1') { $("#addRH").css("margin","-27px 0px 0px 0");  }
  if(x=='rech2') { $("#addRH").css("margin","15px 311px 0px 0");  }

  if(x=='aut1') { $("#addAut").css("margin","-27px 0px 0px 0");  }
  if(x=='aut2') { $("#addAut").css("margin","15px 311px 0px 0");  }

  if(x=='pre1') { $("#addPres").css("margin","10px 0px 0px 0");  }
  if(x=='pre2') { $("#addPres").css("margin","15px 311px 0px 0");  }
}
