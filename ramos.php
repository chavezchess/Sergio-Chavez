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
<center>
  <span class="menu">  FORMULARIO RAMOS </span>
</center>

<p>

<form action="ramos.php" id="formulario" name="formulario" method="post" enctype="multipart/form-data">
  <?php 
include("conexion.php");
?>
  <table width="320" border="1" align="center">
    <tr>
      <td class="USUARIO">NOMBRE</td>
      <td><input name="txtnombre" type="text" id="txtnombre"></td>
    </tr>
    <tr>
      <td class="USUARIO">SEMESTRE</td>
      <td><select name="cmbSemestre" id="cmbSemestre">
        <?php
		$sql="select * from semestre order by SEME_NOMBRE";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['SEME_ID'].">".$fil['SEME_NOMBRE']."</option>";
		}
		?>
      </select></td>
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
      <td colspan="2"><div align="right">
        <input name="btgrabar" type="submit" class="BOTONES" value="GRABAR">
      </div></td>
    </tr>
  </table>
  <div align="center">
    <?php
if (!isset ($_POST["btgrabar"]))
{
}
else
{

if (empty($_POST['txtnombre']))
{

echo "Antes de Continuar Debe llenar todos los campos";


}
else
{
$nombre=$_POST["txtnombre"];
$semestre=$_POST["cmbSemestre"];
$carrera=$_POST["cmbCarrera"];

mysql_select_db("notas2010",$conex);
$sql3="Insert Into asignatura(SEME_ID,ASIG_NOMBRE,CARR_ID) values('$semestre','$nombre','$carrera')";

mysql_query($sql3,$conex);

echo "Datos Ingresados Correctamente";

}	

?>
    </span>
    <?php

}
?>
</div>
</form>
<p><center>
</center>


<p>
<p>

</body>
</html>