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
	font-family: "Arial Rounded MT Bold";
	font-style: italic;
	font-size: 24px;
}
.Estilo2 {
	font-family: "Arial Rounded MT Bold";
	font-size: 14px;
	color: #FFFFFF;
}
.Estilo3 {color: #666666}
.Estilo8 {color: #000000; font-family: "Arial Rounded MT Bold"; }
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo33 {	font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo34 {font-size: 14px}
.Estilo27 {color: #000000; font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 16px; }
.Estilo29 {color: #FFFFFF; font-family: "Arial Rounded MT Bold"; font-size: 18px; font-style: italic; }
.Estilo9 {color: #FFFFFF}
.Estilo10 {color: #000000}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #666666;
	text-decoration: none;
}
body,td,th {
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #0000FF;
}
a:active {
	text-decoration: none;
	color: #0000FF;
}
.Estilo12 {font-family: "Arial Rounded MT Bold"; color: #FF0000;}
.Estilo15 {font-size: 10px}
.Estilo13 {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo16 {color: #666666;
	font-family: "Arial Rounded MT Bold";
}
.Estilo17 {font-size: 18px; font-family: "Arial Rounded MT Bold"; font-weight: bold; }
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
  <p align="center" class="Estilo30"><a href="Menu/Alumno00.php">Alumno</a> |<a href="Menu/Profesor00.php"> Profesor </a>| <a href="Menu/Carrera00.php" class="enlacenav">Carrera</a> | <a href="Menu/Ramos00.php">Ramos</a> | <a href="menu.php" class="enlacenav Estilo34">Menu</a> | <span class="Estilo33">Cerrar Sesi&oacute;n </span></p>
  <hr>
  <span class="Estilo10 Estilo1">
  <?php 
include("conexion.php");
?>
  </span>
</center>

<form action="" id="formulario" name="formulario" method="post" enctype="multipart/form-data">
  <table width="895" border="0" align="center">
    <tr>
      <td height="30" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="657" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><span class="Estilo1 Estilo10">Formulario de Ingreso de Alumnos </span></div></td>
    </tr>
    <tr>
      <td width="228" height="26" bordercolor="#333333" bgcolor="#333333"><div align="center"><span class="Estilo29">Men&uacute; Contextual</span></div></td>
      <td rowspan="18" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><table width="572" border="0" align="center">
          <tr>
            <td height="21" colspan="2" bgcolor="#333333">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" bordercolor="#666666" bgcolor="#CCCCCC"><div align="center" class="Estilo15"><span class="Estilo45"><img src="IMAGEN/index/images.jpg" width="28" height="20" /></span> <span class="Estilo12">*</span> <span class="Estilo13">dato obligatorio </span></div></td>
          </tr>
          <tr>
            <td width="207" bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Rut</div></td>
            <td width="355" bordercolor="#666666" bgcolor="#CCCCCC"><input name="txtrut" type="text" size="12" maxlength="12">
            <span class="Estilo12">* </span></td>
          </tr>
          <tr>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Nombre</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><input name="txtnombres" type="text" size="40" maxlength="40">
            <span class="Estilo12">* </span></td>
          </tr>
          <tr>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Fecha de Nacimiento </div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><input name="txtfnacimiento" type="text" id="txtfnacimiento" size="10" maxlength="10">
            <span class="Estilo12">* </span></td>
          </tr>
          <tr>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Direcci&oacute;n</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><input name="txtdireccion" type="text" id="txtdireccion" size="35" maxlength="35">
            <span class="Estilo12">* </span></td>
          </tr>
          <tr>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Fono</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><span class="Estilo3">
              <label></label>
              <input name="txtfono" type="text" id="txtfono" size="8" maxlength="8">
              <span class="Estilo12">* </span></span></td>
          </tr>
          <tr>
            <td height="27" bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Ciudad</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><span class="Estilo3">
              <label></label>
              <input name="txtciudad" type="text" id="txtciudad" size="12">
              <span class="Estilo12">* </span></span></td>
          </tr>
          <tr>
            <td height="27" bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Jornada</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><span class="Estilo3">
              <label></label>
              <select name="cmbJornada" id="cmbCarrera">
                <?php
		$sql="select * from jornada order by JORN_NOMBRE";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['JORN_ID'].">".$fil['JORN_NOMBRE']."</option>";
		}
		?>
              </select>
              <span class="Estilo12">* </span></span></td>
          </tr>
          <tr>
            <td height="27" bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">A&ntilde;o de ingreso </div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><span class="Estilo3">
              <label></label>
              <input name="txtaingreso" type="text" id="txtaingreso" size="4" maxlength="4">
              <span class="Estilo12">* </span></span></td>
          </tr>
          <tr>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Carrera</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><span class="Estilo3">
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
              <span class="Estilo12">* </span></span></td>
          </tr>
          <tr>
            <td height="27" bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Procedencia</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><span class="Estilo3">
              <label></label>
              <input name="txtprocedencia" type="text" id="txtprocedencia" size="35" maxlength="35">
              <span class="Estilo12">* </span></span></td>
          </tr>
          <tr>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><div align="right" class="Estilo8">Fotografia</div></td>
            <td bordercolor="#666666" bgcolor="#CCCCCC"><input name="txtfile" type="file" id="txtfile" /></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#333333"><div align="center"><span class="Estilo9 Estilo2">Para alamacenar los datos ingresados presione el boton guardar </span></div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#333333"><div align="center">
                <input name="btgrabar" type="submit" value="GRABAR">
            </div></td>
          </tr>
              </table>        <p align="center" class="Estilo27"><span class="Estilo16">Sistema SIGE realizado por CFT Andres Bello Cede Angol &copy; 2010</a></span></p></td>
    </tr>
    <tr>
      <td width="228" height="21" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td width="228" bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo17">Ingresar Datos </div></td>
    </tr>
    <tr>
      <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30">Modificar Datos </div></td>
    </tr>
    <tr>
      <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30"><a href="alumtodos.php">Listar Todos </a></div></td>
    </tr>
    <tr>
      <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30"><a href="FiltrosalumXcarrera.php">Listar por Carrea </a></div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">Para regresar al menu contextual </div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">de inico elija la opci&oacute;n Alumno del </div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">menu Superior. </div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</form>
<div align="center">
  <?php

if (!isset ($_POST["btgrabar"]))
{
?>
  
  
  <?php
}
else
{

if (empty($_POST['txtrut'])  || empty($_POST['txtnombres'])  ||  empty($_POST['cmbCarrera'])  ||   empty($_POST['txtciudad'])||   empty($_POST['txtdireccion']))
{
	


echo "<script language='javascript'>alert(\"Antes de Continuar Debe llenar todos los campos\");</script>";
?>
  
  <?php

}
else
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



mysql_select_db("notas2010",$conex);
$sql="Insert Into alumno(ALUM_RUT,ALUM_NOMBRE,ALUM_FNAC,ALUM_DIRECCION,ALUM_FONO,ALUM_CIUDAD,JORN_ID,ALUM_INGRESO,CARR_ID,ALUM_PROCED,ALUM_FOTO) values('$rut','$nombres','$fnacimiento','$direccion','$fono','$ciudad','$jornada','$ingreso','$carrera','$procedencia','$nombre_imagen')";
mysql_query($sql,$conex);
$imagen=array('image/jpeg');

	
	if (in_array($_FILES['txtfile']['type'],$imagen))
					 {
 if (move_uploaded_file($_FILES['txtfile']['tmp_name'],"../www/imagenes/{$_FILES['txtfile']['name']}"))
 {
 echo "ok";
				
 }
	 else
 {
 echo "error:";
 }
					 }
		
	

?>
  
  
  
  <?php

}
}
?>
</div>
<p>
<p>

</body>
</html>