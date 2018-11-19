<?php session_start();
	$nomb = (!empty($_SESSION["nombres"])) ? ($_SESSION["nombres"]) : (NULL);
	$apel = (!empty($_SESSION["apellidos"])) ? ($_SESSION["apellidos"]) : (NULL);
	$user = (!empty($nomb) && !empty($apel)) ? ("Hola: ".$nomb." ".$apel) : ("");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>GO TEACHER Clases particulares de estad&Iacute;stica DESCRIPTIVA e INFERENCIAL-CALCULO, I, II, III</title>
		<meta http-equiv="Content-Language" content="es"/>
        <meta name="description" content="Clases particulares de matem&aacute;tica y estad&Iacute;stica a domicilio,desde un nivel pre universitario y universitario, tambien se raliza resolucion de tareas">
        <meta name="keywords" content="Profesor de matem&aacute;tica, profesor de estad&Iacute;stica, profesor de calculo, profesor pre universitario, profesor universitario, academia para universitarios, asesor&Iacute;a para universitarios, profesor para escolares">
        <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
        <link rel="stylesheet" type="text/css" href="../css/menu.css">
	</head>
	<body>

		<div class="cont_cabecera">
			<div class="cont_info centrado80">
				<div class="info colorblanco">
					<span class="izqui"><b><?php echo $user;?></b></span>
					<span><img height="35" src="../img/icono/celular_icono.png"> 992051227</span>
					<span><img src="../img/icono/correo_icono.png"> anibal.cayetano@gmail.com</span>
					<span><img src="../img/icono/facebook_icono.png"></span>
				</div>
			</div>				
			<div class="cabecera centrado80">
				<div class="logo colorblanco">
					<span>GO TEACHER</span>
				</div>
				<div class="cont_menu">
					<ul>
						<li class="">
		                    <a href="../index.php" title="INICIO">INICIO</a>                    
		                </li>
						<li class="">
		                    <a href="../nosotros.php" title="NOSOTROS">NOSOTROS</a>                    
		                </li>
						<li class="">
		                    <a href="#" title="SERVICIOS">SERVICIOS</a>
							<ul>
								<li class="">
		                    		<a class="" href="../serviciosuni.php" title="ASESOR&Iacute;A Universitaria">ASESOR&iacute;A UNIVERSITARIA</a>
		                    	</li>
								<li class="">
		                    		<a class="" href="../serviciospre.php" title="ASESOR&Iacute;A Pre Universitaria">ASESOR&iacute;A PRE UNIVERSITARIA</a>
		                    	</li>
								<li class="">
		                    		<a class="" href="../serviciosesco.php" title="ASESOR&Iacute;A Escolar">ASESOR&iacute;A ESCOLAR</a>
		                    	</li>
							</ul>                    
		                </li>
						<li class="active">
		                    <a href="../contactanos.php" title="CONT&aacute;CTANOS">CONT&Aacute;CTANOS</a>             
		                </li>		                
					</ul>
				</div>
			</div>
		</div>

		<div class="centrado80">
			<img src="../img/banner/contactanos.jpg" width="100%" height="250" />
		</div>

		<div class="centrado80">
			<div class="imagenizquierda">
			<h2 class="titulo">Muchas gracias por su consulta.</h2>
			<hr class="sublinea" />
<?php
	$serv = (!empty($_POST['servicio'])) ? (implode(', ', $_POST['servicio'])) : (NULL);
	$serv = (!empty($serv)) ? (" Servicio: ".$serv) : ("");
?>
				<h3>Es un placer atenderte</h3>
                <p>Sr(a). <?php echo $_POST['nombres'].", ".$_POST['apellidos'].", Celular:".$_POST['celular'].", Correo: ".$_POST['email'].$serv;?></p>
                <p>Su mensaje: </p>
                <p><?php echo $_POST['mensaje'];?></p>                
                <p>En breve nos comunicaremos con usted brindándole una respuesta a su solicitud.</p>
                <img src="../img/icono/correo-electronico.jpg" width="500" />
			</div>

			<div class="imagendererecha">
				<h2 class="titulo" style="text-align: right;">CONT&Aacute;CTANOS</h2>
				<hr class="sublinea" width="80%" align="right" /><div class="clearfix"></div>
                <p>Jr. Los Suspiros 117, Santa Isabel, Carabayllo, Lima</p><div class="clearfix"></div><br/>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">RPC</abbr>: (+51) 992051227</p>
                <div class="clearfix"></div>
                <p>&nbsp;</p>
                <div class="clearfix"></div>
                <p><i class="fa fa-envelope-o"></i> <abbr title="Email">Email</abbr>: <a href="mailto:anibal.cayetano@gmail.com">anibal.cayetano@gmail.com</a></p>
                <div class="clearfix"></div>
                <p>&nbsp;</p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Lunes - Domingo: 9:00 AM a 10:00 PM
                </p>

			</div>
		</div>
		
		<p>&nbsp;</p>
		<div style="clear: both;">&nbsp;</div>
		<div class="cont_footer">
			<div class="footer colorblanco">
				<div class="caja_footer">
					<p>TEL&Eacute;FONOS</p>
					<span style="font-size: 13px;"><abbr title="telefono">RPM</abbr>: (+51) 992051227</span>
				</div>
				<div class="caja_footer">
					<p>CORREOS</p>
					<span style="font-size: 13px;"><abbr style="color:yellow;" title="Correo">Correo:</abbr> &nbsp;141187@utp.edu.pe</span>
				</div>
				<div class="caja_footer">
					<p>UB&Iacute;CANOS</p>
					<span>Jr. Los supirus 117 M<sub>z</sub> Q L<sub>te</sub> 17 - Carabayllo</span>
				</div>
				<div style="clear: both;">&nbsp;</div>
				<hr class="colorblanco" />
				<marquee behavior="alternate">Tus comentarios, preguntas y sugerencias son importantes para nosotros.</marquee>
				<hr class="colorblanco" />
				<p class="pie_pagina colorblanco">Copyright &copy; 2016 Cayetano Meza, Jos&eacute; Anibal. Derechos reservados.</p>
			</div>				
		</div>
	</body>
</html>
