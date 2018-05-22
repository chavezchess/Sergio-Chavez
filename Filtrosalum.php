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
<table border="1" align="center">
<tr>
<td class="USUARIO">NOMBRE ALUMNO </td>
<td><input type="text" name="txtalumno" id="txtprofesor"></td>
</tr>
</table>
<center><input name="btbuscar" type="submit" class="BOTONES" value="BUSCAR" >
  <?php



}
else
{


}

if (isset($_POST['btbuscar']))
{

$nombrealumno=$_POST['txtalumno'];

$sql="select * from alumno,carrera where alumno.CARR_ID = carrera.CARR_ID AND ALUM_NOMBRE like '%".$nombrealumno."%'";
$resultado=mysql_query($sql,$conex);
?>
</center>
</form>

<center>
  <span class="menu">Muestra Registros</span>
</center>
<center>

<table width="947" height="24" border="1">
  <tr>
    <td width="58" align="center" class="USUARIO">RUT</td>
    <td width="240" align="center" class="USUARIO">NOMBRE</td>
	<td width="118" align="center" class="USUARIO">CARRERA</td>
	<td width="241" align="center" class="USUARIO">DIRECCION</td>
	<td width="77" align="center" class="USUARIO">CIUDAD</td>
	<td width="45" align="center" class="USUARIO">FONO</td>
	<td width="99" align="center" class="USUARIO">PROCEDENCIA</td>
	</tr>

<?php

while ($reg=mysql_fetch_array($resultado))
{
		echo "<tr>";
		echo "<td>".$reg["ALUM_RUT"]."</td>";
		echo "<td>".$reg["ALUM_NOMBRE"]."</td>";
		echo "<td>".$reg["CARR_NOMBRE"]."</td>";
		echo "<td>".$reg["ALUM_DIRECCION"]."</td>";
		echo "<td>".$reg["ALUM_CIUDAD"]."</td>";
		echo "<td>".$reg["ALUM_FONO"]."</td>";
		echo "<td>".$reg["ALUM_PROCED"]."</td>";
			echo "</tr>";

}
}
?>

</table>
</center>

<p>
  
<p>
<p><a href="Filtrosalum.php" class="cerrar">VOLVER ATRAS</a> <p><a href="menu.php" class="cerrar">MENU PRINCIPAL</a>
</body>
</html>
