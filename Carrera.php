<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {	font-family: "Arial Rounded MT Bold";
	font-style: italic;
	font-size: 24px;
}
.Estilo10 {color: #000000}
.Estilo16 {color: #666666;
	font-family: "Arial Rounded MT Bold";
}
.Estilo29 {color: #FFFFFF; font-family: "Arial Rounded MT Bold"; font-size: 18px; font-style: italic; }
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo33 {font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo34 {font-size: 14px}
.Estilo35 {font-family: "Arial Rounded MT Bold"}
body,td,th {
	color: #000000;
}
a:link {
	text-decoration: none;
	color: #000000;
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
-->
</style>
</head>

<body>
<center>
  <table width="200" border="0" align="center">
    <tr>
      <td><img src="IMAGEN/CFTT.jpg" alt="img" width="1000" height="200" /></td>
    </tr>
  </table>
  <hr />
  <p align="center" class="Estilo30"><a href="Menu/Alumno00.php">Alumno</a> |<a href="Menu/Profesor00.php"> Profesor </a>| <a href="Menu/Carrera00.php" class="enlacenav">Carrera</a> | <a href="Menu/Ramos00.php">Ramos</a> | <a href="menu.php" class="enlacenav Estilo34">Menu</a> | <span class="Estilo33">Cerrar Sesi&oacute;n </span></p>
  <hr />
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
      <td width="657" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><span class="Estilo1 Estilo10">
        <?php 
include("conexion.php");
?>
        Formulario de Ingreso de Carreras </span></div></td>
    </tr>
    <tr>
      <td width="228" height="26" bordercolor="#333333" bgcolor="#333333"><div align="center"><span class="Estilo29">Men&uacute; Contextual</span></div></td>
      <td rowspan="11" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <table width="457" border="0" align="center">
        <tr>
          <td colspan="2" bgcolor="#333333">&nbsp;</td>
        </tr>
        <tr>
          <td width="162" bgcolor="#CCCCCC"><span class="Estilo35">Nombre de Carrera</span> </td>
          <td width="285" bgcolor="#CCCCCC"><input type="text" name="txtnombre" /></td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#333333"><div align="center">
            <input name="btgrabar" type="submit" value="GRABAR" />
          </div></td>
        </tr>
      </table>
          <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center"><span class="Estilo16">Sistema SIGE realizado por CFT Andres Bello Cede Angol &copy; 2010</a></span> </p></td>
    </tr>
    <tr>
      <td width="228" height="21" bordercolor="#333333" bgcolor="#CCCCCC"><div align="center"></div></td>
    </tr>
    <tr>
      <td width="228" bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30">
        <div align="center"><strong>Ingresar Datos </strong></div>
      </div></td>
    </tr>
    <tr>
      <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30">
        <div align="center"><a href="modyelicarr.php">Modificar Datos</a> </div>
      </div></td>
    </tr>
    <tr>
      <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30">
        <div align="center">Listar Todas</div>
      </div></td>
    </tr>
    <tr>
      <td bordercolor="#333333" bgcolor="#CCCCCC"><div align="center" class="Estilo30"></div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#333333" bgcolor="#CCCCCC"><div align="center"></div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">Para regresar al menu contextual </div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">de inico elija la opci&oacute;n Carrera del </div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">menu Superior. </div></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  <p align="center">
    <?php
	if (!isset ($_POST["btgrabar"]))
{
}

else
{

if (empty($_POST['txtnombre']))
{
	


echo "<script language='javascript'>alert(\"Antes de Continuar Debe llenar todos los campos\");</script>";
?>
    <?php

}

else
{

$nombres=$_POST["txtnombre"];




mysql_select_db("notas2010",$conex);
$sql="Insert Into carrera(CARR_NOMBRE) values('$nombres')";
mysql_query($sql,$conex);




		
	

?>
    <?php

}
}
?>
  </p>
</form>
<p></p>
</body>
</html>
