<?php
	if(isset($_GET['Evento'])){ $evento = $_GET['Evento']; }
	else $evento = 'none';
?>
<?php include("php/funciones.php"); ?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
  <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
  <script src="js/preFunciones.js"></script>
</head>
<body id='bodyEventos'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='images/logoWhite.png'><a>
	</div>
	<div id='contenidoEv'>

<?php if($evento == 'Proximo_1'){ ?>

  <div id='prox1'>
    <div id='encabezadoP1'>
      <img src="images/imgEncProx1.png" id='imgProx1'>
      <h1>COLEGIO DE GINECÓLOGOS Y OBSTETRAS DEL<br>HOSPITAL ESPAÑOL PROFESOR
        DR. ALFONSO<br>ALVAREZ BRAVO </h1>
      <p>Invita al:</p>
      <p class='tit2'>QUINTO "CURSO GUÍAS INSTRUCCIONALES EN<br>GINECOLOGÍA Y OBSTETRICIA PARA
        MÉDICOS DE<br>PRIMER CONTACTO Y GINECO-OBSTETRAS"</p>
      <p>Que se llevará a cabo los días 5, 6 y 7 de octubre de 2016 <br>
        en el Auditorio Ángel Urraza del Hospital Español</p>
      <p>Con valor curricular del Consejo Mexicano de Ginecología y Obstetricia.</p>
      <p><b>Titular: Dr. Jorge Vázquez García.<br>
        Adjuntos: Dr. César Moreno Rey, <br>Dra. Rosa María Sánchez López.</b><p>
      </div>
    <div class='proProx1'>
      <h1>Programa:</h1>
      <b>Miércoles 5 de octubre de 2016</b><br>
      <ul>
        <li>07:30-8:00 Inscripciones.</li>
        <li>08:00-8:30 Actualidades en Diabetes Mellitus. Dr. Jorge Vázquez García.</li>
        <li>08:30-9:00 Efectos del Ejercicio en el embarazo. Dr. Gerardo Vázquez Villarreal.</li>
        <li>09:00-9:30 Tratamiento Contemporáneo de la Pérdida Gestacional. Dr. Carlos Salazar López Ortiz.</li>
        <li>09:30-10:00 Nuevas Técnicas Quirúrgicas para el Manejo de la Hemorragia Postparto. Dr. Francisco Zea Prado.</li>
        <li>10:00-10.30 RECESO</li>
        <li>10:30-11:00 Trastornos Hipertensivos en el Embarazo. Dra. Roxana Patricia Álvarez Soriano.</li>
        <li>11:00-11:30 Programación fetal. Dr. José Luis Castro López.</li>
        <li>11:30-12:00 Embarazo Durante la Adolescencia. Dr. Patricio Sanhueza Smith.</li>
        <li>12:00-12:30 RECESO.</li>
        <li>12:30-13:00 Diagnóstico Prenatal Mediante Ultrasonografía. Dr. Juan Carlos Lorenzo Gulias. </li>
        <li>13:00-14:00 COFERENCIA MAGISTRAL Estado Actual de la Salud Reproductiva. Dr. Ricardo García Cavazos.</li>
      </ul>
        <b>Jueves 6 de octubre de 2016</b><br>
        <ul>
          <li>08:00-8:30 Avances en Endoscopia Ginecológica. Dr. Leonel Pedraza González.</li>
          <li>08:30-9:00 Manejo Clínico de la Infección Genital. Dr. Julio César Pérez Ruiz.</li>
          <li>09:00-9:30 Actualidades en Infección por el Virus del Papiloma Humano. Dra. Elsa Díaz López.</li>
          <li>09:30-10:00 Sangrado Menstrual Abundante. Tratamiento no Hormonal. Dr. Zigor Campos Goneaga.</li>
          <li>10:00-10:30 RECESO</li>
          <li>10:30-11:00 La importancia de la Sexualidad en la Consulta Ginecológica. Dr. César Moreno Rey.</li>
          <li>11:00-11:30 Progesterona en Gineco-Obstetricia. Dr. Héctor Mondragón Alcocer.</li>
          <li>11:30-12:00 Manejo Integral del Síndrome Climatérico. Dr. Salvador Corren Reza.</li>
          <li>12:00-12:30 RECESO.</li>
          <li>12:30-13:30 CONFERENCIA MAGISTRAL Avances en Ensayos Clínicos con Células Madre. Dra. Mabel Ávila.</li>
        </ul>
        <b>Viernes 7 de octubre de 2016</b>
        <ul>
          <li>08:00-8:30 Actualidades en Vacunas. Dr. Samuel Weingerz Mehl.</li>
          <li>08:30-9:00 Red de Frio y Técnicas de Aplicación de Vacunas. Dra. Diana Guanteros.</li>
          <li>09:00-9:30 Conceptos contemporáneos en Anticoncepción. Dr. Fernando Pineda Sánchez. </li>
          <li>09:30-10:00 Anovulación crónica. Dr. Jesús Barrón Vallejo.</li>
          <li>10:00-10:30 RECESO</li>
          <li>10:30-11:00 Tratamiento Quirúrgico de la Hemorragia Uterina Anormal. Dr. Xavier Aguirre Osete.</li>
          <li>11:00-11:30 Los nuevas Estrategias de Manejo en la Miomatosis Uterina. Dr. Carlos Lejtik Alva. </li>
          <li>11:30-12:00 Hiperprolactinemia. Repercusiones Clínicas. Dra. Jennifer Segdlach Rocha. </li>
          <li>12:00-12:30 RECESO.</li>
          <li>12:30-13:00 Endometriosis. Tratamiento Médico y Quirúrgico. Dr. Sergio Téllez Velasco.</li>
          <li>13:00-13:30 Cáncer de Mama. Nuevos conocimientos. Dr. Dante Carbajal Ocampo.</li>
          <li>CLAUSURA</li>
        </ul>
    </div>
    <p>Costo $1500.00</p>
    <p>Informes e Inscripciones:</p>
    <p>Teléfonos 52559604 y 52554024. De 10:00 a 14:00 horas</p><br>
		<p style="line-height: 20px;">
			<b>Si eres miembro de AIMEDS puedes concursar para ganar una de nuestras
			30 becas del 100% que tenemos para ti,<br>si ya eres parte de AIMEDS,
			<a href='index.php#afiliados'>INICIA SESIÓN</a> y solicítala,<br>sino ¿Qué
			esperas para <a href='beneficios.php#uneteYa'>REGISTRARTE</a>?
			</b>
	</p>

  </div>

<?php } if($evento == 'Proximo_2'){ ?>

<script> changeBodyEv();  </script>
<div id='prox2'>
	<h1>¿Qué hacer en mi primera guardia?</h1>
	<div>
		<p>
			Frecuentemente el estudiante de Medicina es enviado a prácticas en el
			medio hospitalario mientras cursa las materias básicas y se le
			solicitan procedimientos para los que aún no ha recibido adiestramiento.
			<br><br>
			Por eso AIMEDS creó el curso/taller: "¿Qué hacer en mi primera guardia?",
			dirigido a estudiantes de la carrera de Medicina que deseen adquirir
			conocimientos teórico-prácticos sobre los temas y procedimientos que
			realizarán con mayor frecuencia en el medio intrahospitalario.

		</p>
		<p>
			El curso/taller se llevará a cabo el sábado 15 y domingo 16 de
			octubre de 2016 en un horario de 09:00 a 15:00 hrs en el aula A-005,
			edificio 04 (de gobierno) de la Escuela Superior de Medicina del Instituto
			Politécnico Nacional.
		</p>
		<p>
			<b>Los temas a tratar serán los siguientes:</b><br><br>
			<table class='tPG' id='tPG1'>
				<thead>
					<tr>
						<th colspan='2'>Sábado 15 de octubre</th>
					</tr>
					<tr>
						<th>Horario</th>
						<th>Tema</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>09:00-10:00</td>
						<td>Venopunción e interpretación básica de estudios de laboratorio.</td>
					</tr>
					<tr>
						<td>10:00-11:30</td>
						<td>Venoclisis y teoría de la administración de soluciones.</td>
					</tr>
					<tr><td colspan="2" id='receso'>R E C E S O</td></tr>
					<tr>
						<td>12:00-13:30</td>
						<td>Toma e identificación de un buen electrocardiograma.</td>
					</tr>
					<tr>
						<td>13:30-15:00</td>
						<td>Vendajes básicos para el estudiante de medicina.</td>
					</tr>
				</tbody>
			</table>
			<br><br>
			<table class='tPG' id='tPG2'>
				<thead>
					<tr>
						<th colspan='2'>Domingo 16 de octubre</th>
					</tr>
					<tr>
						<th>Horario</th>
						<th>Tema</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>09:00-10:00</td>
						<td>Teoría de las sondas más utilizadas y correcta colocación de sonda vesical.</td>
					</tr>
					<tr>
						<td>10:00-10:30</td>
						<td>Examen General de Orina</td>
					</tr>
					<tr><td colspan="2" id='receso'>R E C E S O</td></tr>
					<tr>
						<td>11:00-12:30</td>
						<td>Punción arterial e interpretación básica de una gasometría.</td>
					</tr>
					<tr>
						<td>12:30-14:00</td>
						<td>Áreas y reglas del quirófano.</td>
					</tr>
				</tbody>
			</table>

		</p>
		<p id='cuotaPG'>
			La cuota de recuperación es de:<br>
			<b>Afiliados: $250 MXN</b><br>
			<b>Público $400 MXN</b> <br><br>
		</p>
		<p>
			<b>El material que se brindará a los asistentes constará de lo
				necesario para las prácticas y talleres, así como un manual con un
				resumen de la información vista durante el curso.</b>
		</p>

		<a href='registroPrimeraGuardia.php' style='text-decoration: none;'><p id='btnProx2'>Inscríbete</p></a>
		<p style="text-align: center;">Si tienes alguna duda comunícate al correo contacto@aimeds.org</p>
	</div>
</div>
<script>tabPG();</script>
<?php } ?>

</div>
<script src="js/funciones.js"></script>
</body>
</html>
