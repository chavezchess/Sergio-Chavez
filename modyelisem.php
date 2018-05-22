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
<td class="USUARIO">INGRESAR ID </td>
<td>
<input type="text" name="txtid">
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



if (empty($_POST['txtid']))
{	

echo "Antes de Continuar Debe llenar el campo Buscar";
}




if (isset($_POST['btbuscar']))
{


$id=$_POST['txtid'];

$sql="select * from semestre where SEME_ID='$id'";
$consulta=mysql_query($sql,$conex);
if (mysql_num_rows($consulta)==1)
{
$fila=mysql_fetch_array($consulta);


 
?>

<table>
</table>
<p>
  <center>
    <span class="ingresar"><a href="modyeliseme.php">ATRAS </a></span><a href="modyeliseme.php">   </a>
  </center>
  
<center><h2 class="menu">FORMULARIO BUSCADO</h2>
</center>

<form name="formulario" action="" method="post" enctype="multipart/form-data">
  <table width="320" border="1" align="center">
    <tr>
      <td width="75" class="USUARIO">ID</td>
      <td width="229"><input type="text" name="txtid" value="<?php echo $fila['SEME_ID'];?>"></td>
    </tr>
    <tr>
      <td class="USUARIO">NOMBRES</td>
      <td><input type="text" name="txtnombres" value="<?php echo $fila['SEME_NOMBRE'];?>"></td>
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


echo "no existe el ID";
}


}
elseif (isset($_POST['btmodificar']))


{




$id=$_POST["txtid"];
$nombres=$_POST['txtnombres'];


$sqla="update semestre set SEME_NOMBRE='$nombres' where SEME_ID='$id'";
mysql_query($sqla,$conex);

echo "los datos han sido modificados";
}


elseif (isset($_POST['bteliminar']))
{



$id=$_POST['txtid'];
$sqld="delete from semestre where SEME_ID='$id'";
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
