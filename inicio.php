<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inicio</title>
<style type="text/css">
<!--
body {
	background-color: #FF9933;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td colspan="2"><div align="center">INSERTA ESTOS DATOS PARA PODER RESERVAR </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="52%"><div align="right"></div></td>
      <td width="48%">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">Inserta Tu Correo: </div></td>
      <td><label>
        <input name="correo" type="text" id="correo" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Inserta tu Password </div></td>
      <td><label>
        <input name="password" type="text" id="password" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">
	  <?php
	   if (isset($_POST['consultar']))
                   {
                  include("conexion.php");
				  $encontrado = 0;
                  $correo = $_POST['correo'];
				  $password = $_POST['password'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where correo LIKE '%$correo%' and password LIKE '%$password%'");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      $encontrado = 1;
					  echo $consulta['nombre'];
                      echo"<br>";
                      }
					if ($encontrado == 0){
					  echo "Dato no encontrado";
					  }else{
					  
					   header("Location: reservacion.php?correo=".urlencode($correo));
					  }
                    } 
               ?>
	 
	  </div></td>
	  <td><label>
        <input name="consultar" type="submit" id="consultar" value="Enviar" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
