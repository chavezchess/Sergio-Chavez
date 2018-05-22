<html>
<head>
<title>
</title>
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
-->
</style>
</head>
<body>
<?php 
include("menuinclude.php");
include("conexion.php");



if (!isset ($_POST["btbuscar"]) && (!isset ($_POST["btmodificar"]) && (!isset ($_POST["bteliminar"]) )))
{
?>

<center>
  <span class="menu">BUSCAR REGISTRO</span>
</center>

<form name="formulario" action="" method="post" >
<table align="center">
<tr>
<td class="USUARIO">INGRESAR RUT </td>
<td>
<input type="text" name="txtrut">
</td>
</tr>
</table>
<center><input name="btbuscar" type="submit" class="BOTONES" value="BUSCAR" >
</center>
</form>

<?php



}
else
{



if (empty($_POST['txtrut']))
{	

echo "Antes de Continuar Debe llenar el campo Buscar";
}




if (isset($_POST['btbuscar']))
{


$rut=$_POST['txtrut'];

$sql="select * from alumno where ALUM_RUT='$rut'";
$consulta=mysql_query($sql,$conex);
if (mysql_num_rows($consulta)==1)
{
$fila=mysql_fetch_array($consulta);


 
?>

<table>
</table>
<p>
  <center>
    <span class="ingresar"><a href="modyelialum.php">ATRAS </a></span><a href="modyelialum.php">   </a>
  </center>
  
<center><h2 class="menu">FORMULARIO BUSCADO</h2>
</center>

<form name="formulario" action="" method="post" enctype="multipart/form-data">
  <table width="320" border="1" align="center">
    <tr>
      <td width="75" class="USUARIO">RUT</td>
      <td width="229"><input type="text" name="txtrut" value="<?php echo $fila['ALUM_RUT'];?>"></td>
    </tr>
    <tr>
      <td class="USUARIO">NOMBRES</td>
      <td><input type="text" name="txtnombres" value="<?php echo $fila['ALUM_NOMBRE'];?>"></td>
    </tr>
    <tr>
      <td class="USUARIO">FECHA DE NACIMIENTO </td>
      <td><input name="txtfnacimiento" type="text" id="txtfnacimiento" value="<?php echo $fila['ALUM_FNAC'];?>"></td>
    </tr>
    <tr>
      <td class="USUARIO">DIRECCION</td>
      <td><input name="txtdireccion" type="text" id="txtdireccion" value="<?php echo $fila['ALUM_DIRECCION'];?>"></td>
    </tr>
    <tr>
      <td class="USUARIO">FONO</td>
      <td>
        <label></label>
        <input name="txtfono" type="text" id="txtfono" value="<?php echo $fila['ALUM_FONO'];?>">         </td>
    </tr>
    <tr>
      <td height="27" class="USUARIO">CIUDAD</td>
      <td><label></label>
          <input name="txtciudad" type="text" id="txtciudad" value="<?php echo $fila['ALUM_CIUDAD'];?>">      </td>
    </tr>
    <tr>
      <td height="27" class="USUARIO">JORNADA</td>
      <td><label></label>
          <select name="cmbJornada" id="cmbJornada">
          <?php
		$sql="select * from jornada order by JORN_NOMBRE";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['JORN_ID'].">".$fil['JORN_NOMBRE']."</option>";
		}
		?>
      </select>      </td>
    </tr>
    <tr>
      <td height="27" class="USUARIO">A&Ntilde;O INGRESO </td>
      <td><label></label>
          <input name="txtaingreso" type="text" id="txtaingreso" value="<?php echo $fila['ALUM_INGRESO'];?>">      </td>
    </tr>
    <tr>
      <td class="USUARIO">CARRERA</td>
      <td><select name="cmbCarrera" id="cmbCarrera">
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
      <td height="27" class="USUARIO">PROCEDENCIA</td>
      <td><label></label>
          <input name="txtprocedencia" type="text" id="txtprocedencia" value="<?php echo $fila['ALUM_PROCED'];?>">
      </td>
    </tr>
    <tr>
      <td class="USUARIO">IMAGEN</td>
      <td><input type="file" name="txtfile" id="txtfile" /></td>
    </tr>
    <tr>
      <td><input name="btmodificar" type="submit" class="BOTONES" value="MODIFICAR"></td>
      <td><input name="bteliminar" type="submit" class="BOTONES" value="ELIMINAR"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <center></center>
</form>

<?php

}

else
{


echo "no existe el Rut Ingresado";
}


}
elseif (isset($_POST['btmodificar']))


{

$rut=$_POST["txtrut"];
$nombres=$_POST["txtnombres"];
$fnacimiento=$_POST["txtfnacimiento"];
$direccion=$_POST["txtdireccion"];
$fono=$_POST["txtfono"];
$ciudad=$_POST["txtciudad"];
$jornada=$_POST["cmbJornada"];
$ingreso=$_POST["txtaingreso"];
$carrera=$_POST["cmbCarrera"];
$procedencia=$_POST["txtprocedencia"];
$nombre_imagen=$_FILES['txtfile']['name'];

$sqla="update alumno set ALUM_NOMBRE='$nombres',ALUM_FNAC='$fnacimiento',ALUM_DIRECCION='$direccion',ALUM_FONO='$fono',ALUM_CIUDAD='$ciudad',JORN_ID='$jornada',ALUM_INGRESO='$ingreso',CARR_ID='$carrera',ALUM_PROCED='$procedencia',ALUM_FOTO='$nombre_imagen' where ALUM_RUT='$rut'";

mysql_query($sqla,$conex);

echo "los datos han sido modificados";

$imagen=array('image/jpeg');

	
	if (in_array($_FILES['txtfile']['type'],$imagen))
					 {
 if (move_uploaded_file($_FILES['txtfile']['tmp_name'],"../www/imagenes/{$_FILES['txtfile']['name']}"))
 {
 echo "OK";
				
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
$sqld="delete from alumno where ALUM_RUT='$rut'";
mysql_query($sqld,$conex);
echo "los datos han sido eliminados";
}


?>

<?php
}



?>
<p>
<p><a href="menu.php" class="cerrar">MENU PRINCIPAL</a>
<p>
<p>
<p><a href="Index.php" class="cerrar">CERRAR SESION</a>
</body>
</html>
