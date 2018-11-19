<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ENVIAR INFORMES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<table style="width: 100%; text-align: left; background-color: lemonchiffon; border-collapse: collapse;">
  <thead>
    <tr class="active">
      <th style="background-color: 0071bd; padding: 10px; border: 1px solid goldenrod;"><img width="300" src="<?php echo base_url();?>/utilitarios/img/logo/logo.png" alt=""></th>
      <th width=""><h2>INFORMES goteacher</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr style="background-color: 0071bd; padding: 10px; border: 1px solid goldenrod;"><td><h3>Nombre Completo: </h3></td><td><?php echo $apellidos." ".$nombres;?></td></tr>

    <tr style="background-color: 0071bd; padding: 10px; border: 1px solid goldenrod;"><td><h3>Celular: </h3></td><td><?php echo $celular;?></td></tr>


    <tr style="background-color: 0071bd; padding: 10px; border: 1px solid goldenrod;"><td><h3>Correo: </h3></td><td><?php echo $correo;?></td></tr>


    <tr style="background-color: 0071bd; padding: 10px; border: 1px solid goldenrod;"><td><h3>Distrito: </h3></td><td><?php echo $distrito;?></td></tr>


    <tr style="background-color: 0071bd; padding: 10px; border: 1px solid goldenrod;"><td><h3>Fecha envio: </h3></td><td><?php echo $fecha_ingreso;?></td></tr>


    <tr  style="background-color: 0071bd; padding: 10px; border: 1px solid goldenrod;" class="success"><td><h3>Mensaje: </h3></td><td><?php echo $mensaje;?></td></tr>

  </tbody>
</table>
</body>
</html>