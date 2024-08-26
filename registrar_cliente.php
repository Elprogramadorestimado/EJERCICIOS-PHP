<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registrar Cliente</title>
<style type="text/css">
<!--
.Estilo2 {font-family: "Times New Roman", Times, serif}
body {
	background-color: #FF9900;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td colspan="3"><div align="center"><strong>REGISTRATE PARA PODER RESERVAR </strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="41%"><div align="right"><em><span class="Estilo2">CEDULA</span></em></div></td>
      <td width="20%"><input name="cedula" type="text" id="cedula" /></td>
      <td width="39%"><label>
	        <?php
			
              if (isset($_POST['consultar']))
                   {
                  include("conexion.php");
                  $cedula = $_POST['cedula'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      echo $consulta['cedula'];
                      echo"<br>";
                      }
                  include("cerrar_conexion.php");
                    }
               ?>

	        <?PHP
			$vacio = 0;
			   function campoobligatorio($campo){
			      if (isset($_POST['agregar'])){
				      $cedula = $_POST['cedula'];
				      if ($cedula == ""){
					     $vacio = 1;
					  }
				  }
			   }
			  ?>
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><em>NOMBRE</em></div></td>
      <td><input name="nombre" type="text" id="nombre" /></td>
      <td><a href="reservacion.php?">
        <label>
        <?php
              if (isset($_POST['consultar']))
                   {
                  include("conexion.php");
                  $nombre = $_POST['nombre'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      echo $consulta['nombre'];
                      echo"<br>";
                      }
                  include("cerrar_conexion.php");
                    }
               ?>
        </label>
      </a></td>
    </tr>
    <tr>
      <td><div align="right"><em>DIRECCION</em></div></td>
      <td><input name="direccion" type="text" id="direccion" /></td>
      <td><label>
        <?php
              if (isset($_POST['consultar']))
                   {
                  include("conexion.php");
                  $nombre = $_POST['direccion'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      echo $consulta['direccion'];
                      echo"<br>";
                      }
                  include("cerrar_conexion.php");
                    }
               ?>
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><em>TELEFONO</em></div></td>
      <td><input name="telefono" type="text" id="telefono" /></td>
      <td><label>
        <?php
              if (isset($_POST['consultar']))
                   {
                  include("conexion.php");
                  $telefono = $_POST['telefono'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      echo $consulta['telefono'];
                      echo"<br>";
                      }
                  include("cerrar_conexion.php");
                    }
               ?>
      </label></td>
    </tr>
    <tr>
      <td><div align="right">CORREO </div></td>
      <td><label>
        <input name="correo" type="text" id="correo" />
      </label></td>
      <td> --Recuerda este Correo </td>
    </tr>
    <tr>
      <td><div align="right">PASSWORD</div></td>
      <td><label>
        <input name="password" type="text" id="password" />
      </label></td>
      <td>--Recuerda este Password </td>
    </tr>
    <tr>
      <td><div align="right"><span class="Estilo2"></span></div></td>
      <td><input name="activar" type="hidden" id="activar" value="1" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right"><span class="Estilo2"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><div align="right"><span class="Estilo2"></span>
        <table width="100%" border="0">
          <tr>
            <td><label> </label>
              <div align="center">
                <input name="agregar" type="submit" id="agregar" value="Agregar" />
                <input name="consultar" type="submit" id="consultar" value="Consultar" />
                <input name="modificar" type="submit" id="modificar" value="Modificar" />
                <input name="eliminar" type="submit" id="eliminar" value="Eliminar" />
              </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label></label>
              <label></label>
              <label></label>
              <div align="center"><?php
                  if (isset($_POST['agregar']))
                     {
					    $cedula = $_POST['cedula'];
					    $nombre = $_POST['nombre'];
						$direccion = $_POST['direccion'];
						$telefono = $_POST['telefono'];
						$correo = $_POST['correo'];
        				$password = $_POST['password'];


				      if (($cedula == "") or ($nombre == "") or ($direccion == "") or ($telefono ==""))
					  {	
					    echo "Ninguno de los campos pueden estar vacios";
					  }else{
					  	
					  if (is_numeric($cedula)){
					  
					  {
                  include("conexion.php");
				  $encontrado = 0;
                  $cedula = $_POST['cedula'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      $encontrado = 1;
					  
                      }
					if ($encontrado == 1){
					  echo "Dato encontrado";
					  }
                    } 
					  
					  if ($encontrado == 0){ 
                        include ("conexion.php");
	                    $cedula = $_POST['cedula'];
	                    $nombre = $_POST['nombre'];
						$direccion = $_POST['direccion'];
						$telefono = $_POST['telefono'];
						
	                    $conexion ->query ("INSERT INTO $tabla01 (cedula, nombre, direccion, telefono, correo, password) VALUES ('$cedula', '$nombre', '$direccion', '$telefono', '$correo', '$password')");	
						echo "Dato Agregado .. excelente carlos continua";
						}
						}else{
						 echo "La cedula Tiene que ser Numerica";
						}
						}
}
?>
			    <?php
              if (isset($_POST['consultar']))
                   {
                  include("conexion.php");
				  $encontrado = 0;
                  $cedula = $_POST['cedula'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      $encontrado = 1;
					  
                      }
					if ($encontrado == 0){
					  echo "Dato no encontrado";
					  }
                    } 
               ?>
                <?php
              if (isset($_POST['modificar']))
                   {
                  include("conexion.php");
				  $encontrado = 0;
                  $cedula = $_POST['cedula'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      $encontrado = 1;
					  
                      }
					if ($encontrado == 0){
					  echo "Dato no encontrado";
					  }else{
					    $cedula = $_POST['cedula'];
	                    $nombre = $_POST['nombre'];
						$direccion = $_POST['direccion'];
						$telefono = $_POST['telefono'];
						$_UPDATE_SQL = "UPDATE $tabla01 set nombre = '$nombre', direccion = '$direccion', telefono = '$telefono'  where cedula = '$cedula'";
	mysqli_query($conexion,$_UPDATE_SQL);
	                     echo "Datos Modificados";

					  }
                    } 
               ?>
                <?php
              if (isset($_POST['eliminar']))
                   {
                  include("conexion.php");
				  $encontrado = 0;
                  $cedula = $_POST['cedula'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla01 where cedula = $cedula");
                  while($consulta = mysqli_fetch_array($resultados))
                    {
                      $encontrado = 1;
					  
                      }
					if ($encontrado == 1){
				$_DELETE_SQL = "DELETE FROM $tabla01 where cedula = $cedula";
                mysqli_query($conexion,$_DELETE_SQL);
	            echo "Datos Eliminado";

					  }else{
					    echo "Datos No Encontrado";
					  }
                    } 
               ?>
              </div></td>
            </tr>
        </table>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<form id="form2" name="form2" method="get" action="reservacion.php">
  <label></label>
  <div align="center">
    <table width="100%" border="0">
      <tr>
        <td><label>
          <input type="submit" name="Submit" value="Enviar" />
          <input name="nombre" type="hidden" id="nombre" value="carlos" />
        </label></td>
        <td><a href="reservacion.php"></a></td>
      </tr>
    </table>
  </div>
</form>
<p>&nbsp;</p>
</body>
</html>
