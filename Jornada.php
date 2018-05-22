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
?>

  <?php

if (!isset ($_POST["btgrabar"]))
{
?>
</center>

<form action="" id="formulario" name="formulario" method="post" enctype="multipart/form-data">
  <table width="320" border="1" align="center">
    <tr>
      <td width="75" class="USUARIO">NOMBRE</td>
      <td width="229"><input type="text" name="txtnombre"></td>
    </tr>
    <tr>
      <td><input name="btgrabar" type="submit" class="BOTONES" value="GRABAR"></td>
      <td><input name="btborrar" type="submit" class="BOTONES" value="BORRAR"></td>
    </tr>
  </table>
</form>
<?php
}
else
{

if (empty($_POST['txtnombre']))
{
	


echo "Antes de Continuar Debe llenar el nombre de la carrera";
?>
<p>
  <center>
    <span class="ingresar"><a href="Jornada.php">INGRESAR MAS DATOS</a>    </span>
  </center>

  <span class="ingresar">
  <?php

}
else
{

$nombres=$_POST["txtnombre"];




mysql_select_db("notas2010",$conex);
$sql="Insert Into jornada(JORN_NOMBRE) values('$nombres')";
mysql_query($sql,$conex);



}
		
	

?>
  </span>
<p>
<center>
  <span class="ingresar"><a href="Jornada.php">INGRESAR MAS DATOS</a></span>
</center>


<?php

}

?>
<p>
<p><a href="menu.php" class="cerrar">MENU PRINCIPAL</a>
<p>
<p><a href="Index.php" class="cerrar">CERRAR SESION</a>
</body>
</html>