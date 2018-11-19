<?php session_start();

if(!empty($_POST['nombres']))
{
	$_SESSION["nombres"] = $_POST['nombres'];
}

if(!empty($_POST['apellidos']))
{
	$_SESSION["apellidos"] = $_POST['apellidos'];
}

if(!empty($_POST['celular']))
{
	$_SESSION["celular"] = $_POST['celular'];
}

if(!empty($_POST['email']))
{
	$_SESSION["email"] = $_POST['email'];
}

$nombres = (!empty($_SESSION["nombres"])) ? ($_SESSION["nombres"]) : (NULL);
$apellidos = (!empty($_SESSION["apellidos"])) ? ($_SESSION["apellidos"]) : (NULL);
$celular = (!empty($_SESSION["celular"])) ? ($_SESSION["celular"]) : (NULL);
$email = (!empty($_SESSION["email"])) ? ($_SESSION["email"]) : (NULL);

if(!empty($_POST['cursos']) && count($_POST['cursos'])>0)
{
	$_SESSION["cursos"] = $_POST['cursos'];
}

$cursos = (!empty($_SESSION["cursos"])) ? ($_SESSION["cursos"]) : (NULL);

$text = "Registrar Datos Personales";

if(!empty($nombres) && !empty($apellidos) && !empty($celular) && !empty($email) && !empty($cursos) && !isset($_SESSION["numpedido"]))
{
	$_SESSION["numpedido"] = rand(88888888, 10000000);;
}

$numpedido = (!empty($_SESSION["numpedido"])) ? ($_SESSION["numpedido"]) : (NULL);
$text = (!empty($numpedido)) ? ("Muchas gracias por su Compra. # Pedido: ".$_SESSION["numpedido"]) : ($text);

	$user = (!empty($nombres) && !empty($apellidos)) ? ("Hola: ".$nombres." ".$apellidos) : ("");
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
        <link rel="stylesheet" type="text/css" href="../css/formulario.css">
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
						<li class="active">
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
						<li class="">
		                    <a href="../contactanos.php" title="CONT&aacute;CTANOS">CONT&Aacute;CTANOS</a>             
		                </li>		                
					</ul>
				</div>
			</div>
		</div>

		<div class="centrado80">
			<h2 class="titulo"><?php echo $text;?></h2>
			<hr class="sublinea" />
			<br/>
			<div class="centrado80">
				
<?php
	if(!empty($nombres) && !empty($apellidos) && !empty($celular) && !empty($email) && !empty($numpedido))
	{
?>
		<h3>Gracias por tu Reservaci&oacute;n, <?php echo $nombres." ".$apellidos;?>.</h3>
		<span>Le enviamos tu confirmaci&oacute;n al correo electr&oacute;nico <?php echo $email;?>, <b>n&uacute;mero de pedido <?php echo $numpedido;?></b>. Revisa tu factura/recibo, en breve nos contactamos con usted al +51<?php echo $celular;?>.</span>
<?php
	}
	else {
?>
                <div class="centrado80">
				<form class="contact_form contactanos" method="POST" action="gracias_compra.php">
					<div>
						<ul> 
							<li> 
								<label for="name">Nombres:</label>
								<input type="text" name="nombres" placeholder="Nombres" required />
							</li>
							<li>
								<label for="name">Apellidos:</label>
								<input type="text" name="apellidos" placeholder="Apellidos" required />
							</li>
							<li>
								<label for="name">Celular:</label>
								<input type="text" name="celular" placeholder="# Celular" required />
							</li>
							<li>
								<label for="email">Email:</label>
								<input type="email" name="email" placeholder="email@solucionesacme.com" required />
								<span class="form_hint">Formato correcto: "email@solucionesacme.com"</span>
							</li>							
							<li>
								<label for="name"># Cuenta:</label>
								<input type="text" name="nucuenta" placeholder="# Cuenta" required />
							</li>
							<li>
								<button class="submit" type="submit">Guardar</button>
							</li> 
						</ul> 
					</div>
				</form>				
			</div>
<?php } ?>
           	<p>&nbsp;</p>
<?php
	if(!empty($cursos))
	{
		//echo "<pre>"; print_r($productos); echo "</pre>";
?>
		<table width="100%" class="compra" id="compra">
					<thead>
						<tr>
							<th>#</th>
							<th>Curso</th>
							<th>Precio </th>
							<th>Horas</th>
							<th>Sub Total </th>
						</tr>					
					</thead>
					<tbody>
	<?php
		// Verifico si existe el arreglo productos y ademas si es que es array
		if(isset($cursos) && is_array($cursos))
		{
			//Recorro el arreglo
			$i = 0;
			$sum = 0;
			$sub = 0;
			foreach ($cursos as $key => $value) {
				//Filtro solo si la cantidad es mayor a cero
				//echo "<pre>"; print_r($value); echo "</pre>";
				$cant = (!empty($value['cantidad'])) ? ($value['cantidad']) : (0);
				
				if($cant>0)
				{
					$sub = $cant*$value['precio'];
					$sum = $sum + $sub;
					$i++; // Incremento en Uno a i
				
	?>
				<!--Uso hidden para enviar estos inputs a la sgt vista-->
				<!--Los arreglos lo he ordenado asi para recogerlo tal igual al array que he creado-->
				<tr>
					<td><span><?php echo $i;?></span></td>
					<td>
						<span><?php echo $value['curso'];?></span>
					</td>
					<td align="right">
						<i>S/.</i> <span><?php echo $value['precio'];?></span>
					</td>
					<td align="center">
						<span><?php echo $value['cantidad'];?></span>
					</td>
					<td align="right">
						<i>S/.</i> <span><?php echo $sub;?></span>
					</td>
				</tr>
	<?php
				}		
			}
	?>
			<!--Despues de Recorrer los productos muestro en la ultima fila el Sub Total-->
			<tr>
				<td colspan="4"></td>
				<td align="right">
					<i>S/.</i> <span id="total"><?php echo $sum;?></span>
				</td>
			</tr>
	<?php		
		}
	?>					</tbody>
				</table>
<?php		
	}
?>
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
