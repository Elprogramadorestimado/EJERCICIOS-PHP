<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>servicio</title>
<style type="text/css">
<!--
body {
	background-color: #FF9900;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td colspan="5"><div align="center">REGISTRAR SERVICIO </div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right">CODIGO</div></td>
      <td><label>
        <input name="codigo" type="text" id="codigo" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="4%">&nbsp;</td>
      <td width="8%">&nbsp;</td>
      <td width="36%"><div align="right">SERVICIO</div></td>
      <td width="44%"><label>
        <input name="servicio" type="text" id="servicio" />
      </label></td>
      <td width="8%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right">CANTIDAD</div></td>
      <td><label>
        <input name="cant" type="text" id="cant" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right">VALOR</div></td>
      <td><label>
        <input name="valorindividual" type="text" id="valorindividual" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="agregar" type="submit" id="agregar" value="Agregar" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right"></div></td>
      <td><label></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
 <?php

                  if (isset($_POST['agregar']) )
                     {
					    $servicio = $_POST['servicio'];
					    $cant = $_POST['cant'];
						$valorindividual = $_POST['valorindividual'];
						$codigo = $_POST['codigo'];
				      if (($servicio == "") or ($cant == "") or ($valorindividual == "")) 
					  {	
					    echo "Ninguno de los campos pueden estar vacios";
					  }else{
					  	
					  if (is_numeric($cant) and is_numeric($valorindividual)){
					  
					  {
                  include("conexion.php");
				  $encontrado = 0;
                  $servicio = $_POST['servicio'];
				  $codigo = $_POST['codigo'];
                  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla02 where codigo = $codigo");
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
	                    $servicio = $_POST['servicio'];
	                    $cant = $_POST['cant'];
						$valorindividual = $_POST['valorindividual'];
						
	                    $conexion ->query ("INSERT INTO $tabla02 (servicio, cant, valorindividual, codigo) VALUES ('$servicio', '$cant', '$valorindividual', '$codigo')");	
						echo "Dato Agregado .. excelente carlos continua";
						
						}
						}else{
						 echo "La servicio Tiene que ser Numerica";
						}
						}
}
?>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
