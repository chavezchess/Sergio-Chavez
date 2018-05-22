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
.BOTONES {
	font-family: "Times New Roman", Times, serif;
	background-color: #99FFFF;
	border: 2;
}
.iniciar {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}
body {
	
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<?php 

include("conexion.php");
?>

<form action="validar_usuario.php" method="post">
<P>
<table width="200" border="1" align="CENTER">
  <tr>
    <td class="USUARIO">USUARIO</td>
    <td><input type="text" name="usuario" id="txtusuario"></td>
  </tr>
  <tr>
    <td class="USUARIO">PASSWORD</td>
    <td><input type="password"name="password" id="txtpassword"></td>
  </tr>
  <tr>
    <td class="USUARIO">
      <p class="USUARIO">TIPO</p>
     </td>
    <td>
      <p><select name="cmbTipo" id="cmbTipo">
          <?php
		$sql="select distinct * from tipo_usuarios order by tipo_tipo";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['tipo_id'].">".$fil['tipo_tipo']."</option>";
		}
		?>
      </select></p>
    </td>
  </tr>
  <tr>
    <td><input name="btEntrar" id="btEntrar" type="submit" class="BOTONES" value="Entrar"></td>
    <td class="iniciar"><center>
      <a href="crearusuarios.php">Crear Nuevo Usuario</a>
    </center></td>
  </tr>
</table>


</form><strong></strong>
</head>
</html>