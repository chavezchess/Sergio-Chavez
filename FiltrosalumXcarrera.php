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
.Estilo2 {font-family: "Arial Rounded MT Bold"}
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo33 {	font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo34 {font-size: 14px}
.Estilo4 {font-size: 18px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo6 {
	font-family: "Arial Rounded MT Bold";
	color: #0000FF;
	font-style: italic;
	font-size: 18px;
	font-weight: bold;
}
body,td,th {
	color: #000000;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: none;
	color: #0000FF;
}
a:active {
	text-decoration: none;
	color: #0000FF;
}
.Estilo12 {color: #666666;
	font-family: "Arial Rounded MT Bold";
}
.Estilo14 {font-family: "Arial Rounded MT Bold"; color: #FFFFFF;}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>

<center>
  <table width="200" border="0" align="center">
    <tr>
      <td><img src="IMAGEN/CFTT.jpg" alt="img" width="1000" height="200" /></td>
    </tr>
  </table>
  <hr />
  <p align="center" class="Estilo30"><a href="Menu/Alumno00.php">Alumno</a> |<a href="Menu/Profesor00.php"> Profesor </a>| <a href="Menu/Carrera00.php" class="enlacenav">Carrera</a> | <a href="Menu/Ramos00.php">Ramos</a> | <a href="Menu/menu.php" class="enlacenav Estilo34">Menu</a> | <span class="Estilo33">Cerrar Sesi&oacute;n </span></p>
  <hr class="Estilo4" />
  <span class="Estilo6">Lista de Todos los Alumnos por Carrera  </span>
</center>

<form name="formulario" action="FiltrosalumXcarrera.php" method="post">
  <div align="center">
    <?php 

include("conexion.php");

?>
  </div>
  <center>
    <table width="427" border="0" align="center">

      <tr>
        <td width="152" bgcolor="#CCCCCC"><div align="center" class="Estilo2">Elejir Carrera </div></td>
        <td width="259" bgcolor="#CCCCCC"><select name="cmbCarrera" id="cmbCarrera">
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
        <td colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input name="btbuscar" type="submit" id="btbuscar" value="Buscar">
        </div></td>
      </tr>
    </table>
    <p align="center">
      <?php
	if (isset($_POST['btbuscar']))
{ 
?>
      <?php



}
else
{


}

if (isset($_POST['btbuscar']))
{

$nombrealumno=$_POST['cmbCarrera'];

$sql="select * from carrera,alumno where carrera.CARR_ID = alumno.CARR_ID AND carrera.CARR_ID like '%".$nombrealumno."%'";
$resultado=mysql_query($sql,$conex);
?>
    </p>
    <table width="1309" height="24" border="0" align="center">
      <tr>
        <td align="center" bgcolor="#333333"><span class="Estilo14">RUT</span></td>
        <td align="center" bgcolor="#333333"><span class="Estilo14">NOMBRE</span></td>
        <td align="center" bgcolor="#333333"><span class="Estilo14">CARRERA</span></td>
        <td align="center" bgcolor="#333333"><span class="Estilo14">DIRECCION</span></td>
        <td align="center" bgcolor="#333333"><span class="Estilo14">CIUDAD</span></td>
        <td align="center" bgcolor="#333333"><span class="Estilo14">FONO</span></td>
        <td align="center" bgcolor="#333333"><span class="Estilo14">PROCEDENCIA</span></td>
      </tr>
	    <?php
      while ($reg=mysql_fetch_array($resultado))
	  {
	  ?>
      <tr>
        <td width="118" align="center" bgcolor="#FFFFCC"><span class="Estilo2"><?php echo $reg["ALUM_RUT"];?></span></td>
        <td width="253" align="center" bgcolor="#FFFFCC"><span class="Estilo2"><?php echo $reg["ALUM_NOMBRE"];?></span></td>
        <td width="228" align="center" bgcolor="#FFFFCC"><span class="Estilo2"><?php echo $reg["CARR_NOMBRE"];?></span></td>
        <td width="193" align="center" bgcolor="#FFFFCC"><span class="Estilo2"><?php echo $reg["ALUM_DIRECCION"];?></span></td>
        <td width="114" align="center" bgcolor="#FFFFCC"><span class="Estilo2"><?php echo $reg["ALUM_CIUDAD"];?></span></td>
        <td width="122" align="center" bgcolor="#FFFFCC"><span class="Estilo2"><?php echo $reg["ALUM_FONO"];?></span></td>
        <td width="251" align="center" bgcolor="#FFFFCC"><span class="Estilo2"><?php echo $reg["ALUM_PROCED"];?></span></td>
      </tr>
    
<?php
}
}
?>
  </table>
</form>
<div align="center" class="Estilo12">Sistema SIGE realizado por CFT Andres Bello Cede Angol © 2010 </div>
</body>
</html>
