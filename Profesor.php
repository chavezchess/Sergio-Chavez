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
.Estilo15 {font-family: "Arial Rounded MT Bold";
	font-size: 24;
}
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo33 {font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo27 {color: #000000; font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 16px; }
.Estilo29 {color: #FFFFFF; font-family: "Arial Rounded MT Bold"; font-size: 18px; font-style: italic; }
.Estilo34 {font-size: 24px}
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
.Estilo40 {font-size: 14px}
.Estilo16 {color: #666666;
	font-family: "Arial Rounded MT Bold";
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
<p align="center" class="Estilo30"><a href="Menu/Alumno00.php">Alumno</a> | Profesor | <a href="Menu/Carrera00.php" class="enlacenav">Carrera</a> | <a href="Menu/Ramos00.php">Ramos</a> | <span class="Estilo40">Menu</span>  | <span class="Estilo33">Cerrar Sesi&oacute;n</span></p>
<hr>
<table width="895" border="0" align="center">
  <tr>
    <td height="23" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="657" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><span class="Estilo34 Estilo10 Estilo1 Estilo35"><em><span class="Estilo15">
      <?php 
include("conexion.php");
?>
    </span>Formulario de Ingreso de Profesores </em></span></div></td>
  </tr>
  <tr>
    <td width="228" height="23" bordercolor="#333333" bgcolor="#333333"><div align="center"><span class="Estilo29">Men&uacute; Contextual</span></div></td>
    <td rowspan="12" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><form action="" id="formulario" name="formulario" method="post" enctype="multipart/form-data">
      <table width="425" border="0" align="center">
          <tr>
            <td colspan="2" bgcolor="#333333">&nbsp;</td>
          </tr>
          <tr>
            <td width="119" bgcolor="#CCCCCC"><div align="right" class="Estilo35">RUT</div></td>
            <td width="296" bgcolor="#CCCCCC"><input type="text" name="txtrut"></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC"><div align="right" class="Estilo35">Nombres</div></td>
            <td bgcolor="#CCCCCC"><input type="text" name="txtnombres"></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC"><div align="right" class="Estilo35">Direcci&oacute;n</div></td>
            <td bgcolor="#CCCCCC"><input name="txtdireccion" type="text" id="txtdireccion"></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC"><div align="right" class="Estilo35">Carrera</div></td>
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
            <td bgcolor="#CCCCCC"><div align="right" class="Estilo35">Imagen</div></td>
            <td bgcolor="#CCCCCC"><input type="file" name="txtfile" id="txtfile" /></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#333333"><div align="center"><span class="Estilo9 Estilo2 Estilo36">Para alamacenar los datos ingresados presione el boton guardar </span></div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#333333">
              <div align="center">
                <input name="btgrabar" type="submit" value="GRABAR">
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

if (empty($_POST['txtrut'])  || empty($_POST['txtnombres'])  ||  empty($_POST['cmbCarrera'])  ||   empty($_POST['txtdireccion']))
{
	


echo "<script language='javascript'>alert(\"Antes de Continuar Debe llenar todos los campos\");</script>";
?>
          <span class="ingresar">
          <?php

}
else
{
$rut=$_POST["txtrut"];
$nombres=$_POST["txtnombres"];
$direccion=$_POST["txtdireccion"];
$carrera=$_POST["cmbCarrera"];
$nombre_imagen=$_FILES['txtfile']['name'];


mysql_select_db("notas2010",$conex);
$sql="Insert Into profesor(PROF_RUT,PROF_NOMBRE,PROF_DIRECCION,CARR_ID,PROF_IMAGEN) values('$rut','$nombres','$direccion','$carrera','$nombre_imagen')";
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
          </span>
          <?php

}
}
?>
        </div>
      </form>
      <p>
      <center>
          <p class="ingresar"><a href="Profesor.php"></a>          <span class="Estilo16">Sistema SIGE realizado por CFT Andres Bello Cede Angol &copy; 2010</a></span></p>
          <p class="ingresar">&nbsp;</p>
          <p class="ingresar">&nbsp; </p>
      </center>
      <p>
        <center>
          <span class="ingresar"><a href="Profesor.php"></a></span></center>
    </td>
  </tr>
  <tr>
    <td width="228" height="21" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td width="228" bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30">
      <div align="center"><strong>Ingresar Datos </strong></div>
    </div></td>
  </tr>
  <tr>
    <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30">
      <div align="center">Modificar Datos </div>
    </div></td>
  </tr>
  <tr>
    <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30">
      <div align="center">Listar Todos </div>
    </div></td>
  </tr>
  <tr>
    <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center"><span class="Estilo30">Listar por Carrea </span></div></td>
  </tr>
  <tr>
    <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center"><a href="ingresaramosprofesor.php" class="Estilo30">Asignar Ramos</a></div></td>
  </tr>
  <tr>
    <td bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  
  <tr>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<p align="center" class="Estilo15">&nbsp;</p>
<p>

</body>
</html>