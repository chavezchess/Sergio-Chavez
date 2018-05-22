<html>
<head>
<title></title>
<style type="text/css">
<!--
.USUARIO {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	background-color: #CCFF66;
}
.ingresar {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	font-style: normal;
	font-weight: bold;
	background-color: #FFFFFF;
}
.cerrar {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FF0000;
	text-decoration: underline;
	background-color: #FFFF00;
}
.BOTONES {
	font-family: "Times New Roman", Times, serif;
	background-color: #99FFFF;
	border: 2;
}
body {
	background-image: url(Fondito.JPG);
}
.menu {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
	font-weight: bold;
	background-color: #FFFFFF;
}
.Estilo1 {
	font-size: 24px;
	font-family: "Arial Rounded MT Bold";
	font-style: italic;
}
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo33 {font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo34 {font-size: 14px}
.Estilo35 {font-family: "Arial Rounded MT Bold"}
.Estilo36 {color: #FFFFFF}
body,td,th {
	color: #000000;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #666666;
	text-decoration: none;
}
a:hover {
	color: #0000FF;
	text-decoration: none;
}
a:active {
	color: #0000FF;
	text-decoration: none;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="IMAGEN/CFTT.jpg" alt="img" width="1000" height="200" /></td>
  </tr>
</table>
<hr />
<p align="center" class="Estilo30"><a href="Menu/Alumno00.php">Alumno</a> |<a href="Menu/Profesor00.php"> Profesor </a>| <a href="Menu/Carrera00.php" class="enlacenav">Carrera</a> | <a href="Menu/Ramos00.php">Ramos</a> | <a href="Menu/menu.php" class="enlacenav Estilo34">Menu</a> | <span class="Estilo33">Cerrar Sesi&oacute;n </span></p>
<hr />
<p>&nbsp;</p>
<table width="679" border="0" align="center">
  <tr>
    <td width="903" height="23"><form name="formulario" action="" method="post" >
      <div align="center">
        <p>
          <?php 
include("conexion.php");
if (!isset ($_POST["btbuscar"]) && (!isset ($_POST["btmodificar"]) && (!isset ($_POST["bteliminar"]) )))
{
?>
          <span class="Estilo1 Estilo10">Formulario de Modificaci&oacute;n de Profesores </span></p>
        </div>
      <p>&nbsp;</p>
      <table width="519" border="0" align="center">
        <tr>
          <td colspan="2" bgcolor="#333333"><div align="center"><span class="Estilo36">Para regresar al menu contextual de inico elija la opci&oacute;n Profesor del menu Superior.</span></div></td>
          </tr>
        <tr>
          <td width="174" bgcolor="#CCCCCC"><div align="right" class="Estilo35">Ingresar RUT  </div></td>
          <td width="335" bgcolor="#CCCCCC"><input name="txtrut" type="text" id="txtrut">
            <input name="btbuscar" type="submit" value="BUSCAR" ></td>
        </tr>
      </table>
      <p align="center">
        <?php



}
else
{



if (empty($_POST['txtrut']))
{	

echo "<script language='javascript'>alert(\"Antes de Continuar Debe llenar el campo Buscar\");</script>";
}




if (isset($_POST['btbuscar']))
{


$rut=$_POST['txtrut'];

$sql="select * from profesor where PROF_RUT='$rut'";
$consulta=mysql_query($sql,$conex);
if (mysql_num_rows($consulta)==1)
{
$fila=mysql_fetch_array($consulta);


 
?>
      </p>
      <table width="519" border="0" align="center">
        <tr>
          <td width="173" bgcolor="#CCCCCC" class="Estilo35"><div align="right">RUT</div></td>
          <td width="336" bgcolor="#CCCCCC"><input name="txtrut2" type="text" id="txtrut2" value="<?php echo $fila['PROF_RUT'];?>"></td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC" class="Estilo35"><div align="right">Nombres</div></td>
          <td bgcolor="#CCCCCC"><input type="text" name="txtnombres" value="<?php echo $fila['PROF_NOMBRE'];?>"></td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC" class="Estilo35"><div align="right">Direcci&oacute;n</div></td>
          <td bgcolor="#CCCCCC"><input type="text" name="txtdireccion" value="<?php echo $fila['PROF_DIRECCION'];?>"></td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC" class="Estilo35"><div align="right">Carrera</div></td>
          <td bgcolor="#CCCCCC"><select name="cmbCarrera" id="cmbCarrera">
              <?php
		$sql="select * from carrera order by CARR_NOMBRE";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['CARR_ID'].">".$fil['CARR_NOMBRE']."</option>";
		}
		?>
          </select></td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC" class="Estilo35"><div align="right">Imagen</div></td>
          <td bgcolor="#CCCCCC"><input type="file" name="txtfile" id="txtfile" value="<?php echo $fila['PROF_IMAGEN'];?>"/></td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#333333"><div align="right">
            <input name="btmodificar" type="submit" value="Modificar">            
            <input name="bteliminar" type="submit" value="Eliminar">
          </div></td>
          </tr>
      </table>
      <p align="center">
        <?php

}

else
{


echo "Debe volver ATRAS";
}


}
elseif (isset($_POST['btmodificar']))


{




$rut=$_POST["txtrut2"];
$nombres=$_POST['txtnombres'];
$direccion=$_POST['txtdireccion'];
$carrera=$_POST['cmbCarrera'];
$imagen=$_FILES['txtfile']['name'];


$sqla="update profesor set PROF_NOMBRE='$nombres', PROF_DIRECCION='$direccion', CARR_ID='$carrera', PROF_IMAGEN='$imagen' where PROF_RUT='$rut'";
mysql_query($sqla,$conex);

echo "los datos han sido modificados";

$imagen=array('image/jpeg');

	
	if (in_array($_FILES['txtfile']['type'],$imagen))
					 {
 if (move_uploaded_file($_FILES['txtfile']['tmp_name'],"../www/imagenes/{$_FILES['txtfile']['name']}"))
 {
 echo "";
				
 }
	 else
 {
 echo "error:";
 }
					 }
		
	

}


elseif (isset($_POST['bteliminar']))
{



$rut=$_POST['txtrut'];
$sqld="delete from profesor where PROF_RUT='$rut'";
mysql_query($sqld,$conex);
echo "los datos han sido eliminados";
}


?>
        <?php
}



?>
        <p align="center"><span class="ingresar"><a href="modyeliprof.php">ATRAS</a></span>
    </form>
    </p></td>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp;</p>
<table>
</table>
<p><center>
</center>
  
<center><h2 class="menu">&nbsp;</h2>
</center>

</body>
</html>
