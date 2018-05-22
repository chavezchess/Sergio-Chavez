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
.Estilo1 {font-family: "Arial Rounded MT Bold";
	font-style: italic;
	font-size: 24px;
}
.Estilo10 {color: #000000}
.Estilo16 {color: #666666;
	font-family: "Arial Rounded MT Bold";
}
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo35 {font-family: "Arial Rounded MT Bold"}
.Estilo33 {font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo34 {font-size: 14px}
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
.Estilo36 {color: #FFFFFF}
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
  <hr />
</center>

<form name="formulario" action="" method="post" >
  <table width="679" border="0" align="center">
    <tr>
      <td width="673" height="30" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><span class="Estilo1 Estilo10">
          <?php 

include("conexion.php");




?>
        Formulario de Modificaci&oacute;n de Carreras </span></div></td>
    </tr>
    <tr>
      <td height="152" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>
          <table width="519" border="0" align="center">
            <tr>
              <td colspan="2" bgcolor="#333333"><div align="center"><span class="Estilo36">Para regresar al menu contextual de inico elija la opci&oacute;n Carrera del menu Superior.</span> </div></td>
            </tr>
            <tr>
              <td width="194" bgcolor="#CCCCCC"><div align="right"><span class="Estilo35">Ingresar ID</span></div></td>
              <td width="315" bgcolor="#CCCCCC"><input type="text" name="txtid" />
                  <input name="btbuscar" type="submit" value="BUSCAR"></td>
            </tr>
          </table>
          <p align="center">
            <?php


if (!isset ($_POST["btbuscar"]) && (!isset ($_POST["btmodificar"]) && (!isset ($_POST["bteliminar"]) )))
{
}
else
{



if (empty($_POST['txtid']))
{	

echo "<script language='javascript'>alert(\"Antes de Continuar Debe llenar el campo Buscar\");</script>";
}




if (isset($_POST['btbuscar']))
{


$id=$_POST['txtid'];

$sql="select * from carrera where CARR_ID='$id'";
$consulta=mysql_query($sql,$conex);
if (mysql_num_rows($consulta)==1)
{
$fila=mysql_fetch_array($consulta);


 
?>
          </p>
          <center>
            <table width="519" border="0" align="center">
              <tr>
                <td width="194" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><div align="right"><span class="Estilo35">ID</span></div></td>
                <td width="316" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><input type="text" name="txtid2" value="<?php echo $fila['CARR_ID'];?>" /></td>
              </tr>
              <tr>
                <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><div align="right"><span class="Estilo35">Nombre</span></div></td>
                <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><input type="text" name="txtnombres" value="<?php echo $fila['CARR_NOMBRE'];?>" /></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#333333"><div align="right">
                    <input name="btmodificar" type="submit" value="Modificar" />
                    <input name="bteliminar" type="submit" value="Eliminar" />
                </div></td>
              </tr>
            </table>
          <p>
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


$sqla="update carrera set CARR_NOMBRE='$nombres' where CARR_ID='$id'";
mysql_query($sqla,$conex);

echo "los datos han sido modificados";
}


elseif (isset($_POST['bteliminar']))
{



$id=$_POST['txtid'];
$sqld="delete from carrera where CARR_ID='$id'";
mysql_query($sqld,$conex);
echo "los datos han sido eliminados";
}
}

?>
            </p>
        </center>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </table>
</form>

<p align="center">

</body>
</html>
