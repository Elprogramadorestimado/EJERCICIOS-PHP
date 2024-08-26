<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reservaci&oacute;n</title>
<style type="text/css">
<!--
body {
	background-color: #FF9900;
}
.Estilo3 {font-size: 24; }
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td colspan="2"><div align="center" class="Estilo3">SERVICIO DE RESERVACI&Ograve;N</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="51%"><span class="Estilo3">Bienvenido Sr(a) 
	      <?PHP
                  include("conexion.php");
                  $correo = $_GET['correo'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where correo LIKE '%$correo%'");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      echo $consulta['nombre'];
                      echo"<br>";
                      }
                  include("cerrar_conexion.php");
               ?>
      </a></span></td>
      <td width="49%"><span class="Estilo3"></span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="Estilo3">Nos gustar&iacute;a guiarla en este proceso de de reservaci&oacute;n, por favor informe que desea reservar .... 
        
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">Servicio: </div></td>
      <td><label>
        <select name="servicio" id="servicio">
          <option value="Silla">Silla</option>
          <option value="MESAS">MESAS</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="right">&iquest;que cantidad? </div></td>
      <td><label>
        <input name="cantidad" type="text" id="cantidad" size="10" />
        <input name="consultar" type="submit" id="consultar" value="Total" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Total a Cancelar </div></td>
      <td>
	 
	  <?php
			  
              if (isset($_POST['consultar']))
                   {
                  include("conexion.php");
				  $contador=0;
                  $servicio = $_POST['servicio'];
				  $correo = $_POST['correo'];
				  $cantidad = $_POST['cantidad'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla02 where servicio LIKE '%$servicio%'");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
					  $valorindividual = $consulta['valorindividual'];
					  $total = $valorindividual * $cantidad;
					  $servicio = $consulta['servicio'];
					  echo $total;
                      echo"<br>";
					  $contador=1;
					  
                      }
					  if ($contador == 0){
					   echo "No encontrado";
					  }else{
					  $correo = $_GET['correo'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where correo LIKE '%$correo%'");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      $nombre= $consulta['nombre'];
                      $cedula= $consulta['cedula'];
					  
                      }
                  include("cerrar_conexion.php");

					  
					  
					  
					  
					  
                        include ("conexion.php");
	               
	                    $cantidad = $_POST['cantidad'];
						$correo  = $_GET['correo'];
						$pagada = "No";
						$finalizada = "No";
						$valorindividual = $_POST['valorindividual'];
						
						
						
						
						
	                    $conexion ->query ("INSERT INTO $tabla03 (correo, cantidad, cedula, pagada, finalizada, servicio) VALUES ('$correo', '$cantidad','$cedula', '$pagada','$finalizada', '$servicio')");	
						echo "Dato Agregado .. excelente carlos continua";
						
					  }
					  
                  include("cerrar_conexion.php");
                    }
               ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="agregar" type="submit" id="agregar" value="Deacuerdo" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
