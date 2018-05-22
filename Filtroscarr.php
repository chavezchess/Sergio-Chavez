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
  <span class="menu">BUSCAR REGISTRO</span>
</center>

<form name="formulario" action="" method="post">
<table align="center">
<tr>
<td class="USUARIO">NOMBRE CARRERA </td>
<td>
<select name="cmbCarrera" id="cmbCarrera">
          <?php
		$sql="select * from carrera order by CARR_NOMBRE";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['CARR_ID'].">".$fil['CARR_NOMBRE']."</option>";
		}
		?>
      </select>
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





}




if (isset($_POST['btbuscar']))
{

$nombrecarrera=$_POST['cmbCarrera'];

$sql="select * from carrera where CARR_ID like '%".$nombrecarrera."%'";
$resultado=mysql_query($sql,$conex);
?>
<center>
  <span class="menu">Muestra datos</span>
</center>
<center>

<table width="322" border="1">
  <tr>
    <td width="94" class="USUARIO" align="center">ID</td>
    <td width="185" class="USUARIO" align="center">NOMBRE</td>
  </tr>

<?php

while ($reg=mysql_fetch_array($resultado))
{
		echo "<tr>";
		echo "<td>".$reg["CARR_ID"]."</td>";
		echo "<td>".$reg["CARR_NOMBRE"]."</td>";
			echo "</tr>";

}
}
?>

</table>
</center>

<p>
  
<p>
<p><a href="Filtroscarr.php" class="cerrar">VOLVER ATRAS</a> <p><a href="menu.php" class="cerrar">MENU PRINCIPAL</a>
</body>
</html>
