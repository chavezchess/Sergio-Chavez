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

include("conexion.php");
?>

  <?php

if (!isset ($_POST["btgrabar"]))
{
?>
</center>

<center>
  <span class="menu">Crear Usuarios</span>
</center>
<form action="" id="formulario" name="formulario" method="post" enctype="multipart/form-data">
  <table width="320" border="1" align="center">
    <tr>
      <td width="75" class="USUARIO">USUARIO</td>
      <td width="229"><input type="text" name="txtusuario"></td>
    </tr>
    <tr>
      <td class="USUARIO">PASSWORD</td>
      <td><input type="password" name="txtpassword"></td>
    </tr>
    <tr>
      <td class="USUARIO">DESCRIPCION</td>
      <td><input type="text" name="txtdescripcion"></td>
    </tr>
    <tr>
      <td class="USUARIO">EMAIL</td>
      <td><input type="text" name="txtemail"></td>
    </tr>
    <tr>
      <td class="USUARIO">FECHA</td>
      <td><input type="text" name="txtfecha"></td>
    </tr>
    <tr>
      <td class="USUARIO">TIPO</td>
      <td><select name="cmbTipo" id="cmbTipo">
        <?php
		$sql="select * from tipo_usuarios order by tipo_tipo";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['tipo_id'].">".$fil['tipo_tipo']."</option>";
		}
		?>
      </select></td>
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

if (empty($_POST['txtusuario']) || empty($_POST['txtpassword']))
{
	


echo "Antes de Continuar Debe llenar el nombre de la carrera";
?>
<p>
  <center>
    <span class="ingresar"><a href="crearusuarios.php">INGRESAR MAS USUARIOS</a>    </span>
  </center>

  <span class="ingresar">
  <?php

}
else
{

$usuario=$_POST["txtusuario"];
$password=$_POST["txtpassword"];
$descripcion=$_POST["txtdescripcion"];
$email=$_POST["txtemail"];
$fecha=$_POST["txtfecha"];
$tipo=$_POST["cmbTipo"];




mysql_select_db("notas2010",$conex);
$sql="Insert Into usuarios(usuario,password,descripcion,email,fecha,tipo) values('$usuario','$password','$descripcion','$email','$fecha','$tipo')";
mysql_query($sql,$conex);


echo "Usuario Ingresado Correctamente Ahora Puede Loguearse";

}
		
	

?>
  </span>
<p>
<center>
  <span class="ingresar"><a href="crearusuarios.php">INGRESAR MAS USUARIOS</a></span>
</center>


<?php

}

?>
<p>
<p><a href="login.php" class="cerrar"><center>IR A LOGIN</center> </a>
<p>

</body>
</html>