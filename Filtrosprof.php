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
<body>
<?php 
include("menuinclude.php");
include("conexion.php");



if (!isset ($_POST["btbuscar"]))
{
?>

<center>
  <span class="menu">BUSCAR PROFESORES </span>
</center>

<form name="formulario" action="" method="post">
<table align="center">
<tr>
<td class="USUARIO">NOMBRE PROFESOR </td>
<td><input type="text" name="txtprofesor" id="txtprofesor"></td>
</tr>
</table>
<center><input name="btbuscar" type="submit" class="BOTONES" value="BUSCAR" >
</center>
</form>

<?php



}
else
{


}

if (isset($_POST['btbuscar']))
{

$nombreprofesor=$_POST['txtprofesor'];

$sql="select * from profesor where PROF_NOMBRE like '%".$nombreprofesor."%'";
$resultado=mysql_query($sql,$conex);
?>
<center>
  <span class="menu">Muestra Registros</span>
</center>
<center>

<table width="544" border="1">
  <tr>
    <td class="USUARIO" align="center">RUT</td>
    <td class="USUARIO" align="center">NOMBRE</td>
	<td class="USUARIO" align="center">DIRECCION</td>
	</tr>

<?php

while ($reg=mysql_fetch_array($resultado))
{
		echo "<tr>";
		echo "<td>".$reg["PROF_RUT"]."</td>";
		echo "<td>".$reg["PROF_NOMBRE"]."</td>";
		echo "<td>".$reg["PROF_DIRECCION"]."</td>";
			echo "</tr>";

}
}
?>

</table>
</center>

<p>
  
<p>
<p><a href="Filtrosprof.php" class="cerrar">VOLVER ATRAS</a> <p><a href="menu.php" class="cerrar">MENU PRINCIPAL</a>
</body>
</html>
