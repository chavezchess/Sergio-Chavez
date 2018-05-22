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



if (!isset ($_POST["btIngresar"]) && (!isset ($_POST["btguardar"])))
{
?>

<center>
  <span class="menu">Ingreso de Notas </span>
</center>

<form name="formulario" action="" method="post" >
<table align="center">
<tr>
<td class="USUARIO">INGRESAR CARRERA </td>
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
  <td class="USUARIO">INGRESAR ASIGNATURA    </td>
  <td><span class="USUARIO">
    <select name="cmbAsignatura" id="cmbAsignatura">
      <?php
		$sql="select * from asignatura order by ASIG_NOMBRE";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['ASIG_ID'].">".$fil['ASIG_NOMBRE']."</option>";
		}
		?>
    </select>
  </span></td>
</tr>
<tr>
  <td class="USUARIO">iNGRESAR SEMESTRE </td>
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
  <td class="USUARIO">A&Ntilde;O A CURSAR </td>
  <td><select name="cmbCursar" id="cmbCursar">
    <?php
		$sql="select * from alumno_asignatura order by ALUM_AÑOCURSADO";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['ALUM_AÑOCURSADO'].">".$fil['ALUM_AÑOCURSADO']."</option>";
		}
		?>
  </select></td>
</tr>
<tr>
  <td class="USUARIO">iNGRESAR JORNADA </td>
  <td><select name="cmbJornada" id="cmbJornada">
    <?php
		$sql="select * from jornada order by JORN_NOMBRE";
		$consulta=mysql_query($sql,$conex);
		while($fil=mysql_fetch_array($consulta))
		{
		echo "<option value=".$fil['JORN_ID'].">".$fil['JORN_NOMBRE']."</option>";
		}
		?>
  </select></td>
</tr>
</table>
<center><input name="btIngresar" type="submit" class="BOTONES" value="INGRESAR" >
</center>
</form>

<?php



}
else
{

if (isset($_POST['btIngresar']))
{


$carrera=$_POST['cmbCarrera'];
$asignatura=$_POST['cmbAsignatura'];

//$sql="select * from alumno where CARR_ID='$carrera'";

$sqlnota="select * from alumno where CARR_ID like '%".$carrera."%'";
$resultado=mysql_query($sqlnota,$conex);

$sqlprofesor="select * from profesor_asignatura where ASIG_ID like '%".$asignatura."%'";
$resul=mysql_query($sqlprofesor,$conex);



 
?>

<table>
</table>
<p>
  <center>
    <span class="ingresar"><a href="notas.php">ATRAS </a></span><a href="notas.php">   </a>
  </center>
  
<center><h2 class="menu">FORMULARIO BUSCADO</h2>
</center>

<form name="formulario" action="" method="post" enctype="multipart/form-data">
<center>
  CARRERA
  <input type="text" name="txtcarrera"  value="<?php echo $_POST['cmbCarrera']; ?>" >
SEMESTRE
<input type="text" name="txtsemestre"  value="<?php echo $_POST['cmbSemestre']; ?>" >
ASIGNATURA
<input type="text" name="txtasignatura"  value="<?php echo $_POST['cmbAsignatura']; ?>" ><P>
A&Ntilde;O CURSADO
<input type="text" name="txtanocursado" value="<?php echo $_POST['cmbCursar']; ?>" >
JORNADA
<input type="text" name="txtjornada"  value="<?php echo $_POST['cmbJornada']; ?>" >
PROFESOR
<input type="text" name="txtprofesor" value="<?php while ($regd=mysql_fetch_array($resul)){echo $regd["PROF_RUT"];}?>"></center>

 
 
 
  <table width="340" border="1" align="center">
    <tr>
	 <td width="229" class="USUARIO" align="center">RUT</td>
      <td width="229" class="USUARIO" align="center">NOMBRES</td>
   
      <td width="95" class="USUARIO" align="center">PROMEDIO  </td>
    </tr>
    <tr>
      <?php
	while ($reg=mysql_fetch_array($resultado))
{ 
?>
<td class="USUARIO"><input name="txtrut[]" type="text" value="<?php echo $reg["ALUM_RUT"];?>" width="215"></td>
      <td class="USUARIO"><input name="txtnombres[]" type="text" value="<?php echo $reg["ALUM_NOMBRE"];?>" width="215"></td>
      <td class="USUARIO"><input name="txtpromedio1[]" type="text" value="" width="90"></td>
    </tr>
    <?php
	   }	
	   ?>
    <tr>
      <td colspan="7" align="center"><input name="btguardar" type="submit" class="BOTONES" value="GUARDAR"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <center></center>
</form>

<?php

}


if (isset($_POST['btguardar']))
{
$carr=$_POST['txtcarrera'];
$semes=$_POST['txtsemestre'];
$asig=$_POST['txtasignatura'];
$cursado=$_POST['txtanocursado'];
$jornada=$_POST['txtjornada'];
$rut=$_POST['txtrut'];
$profesor=$_POST['txtprofesor'];
$nota=$_POST['txtpromedio1'];
$i=0;
foreach($rut as $rut2)
{

$sql2= "INSERT INTO nota(ALUM_RUT,JORN_ID,ASIG_ID,ALUM_AÑOCURSADO,PROF_RUT,SEME_ID,NOTA_PROMEDIO) VALUES ('$rut2','$jornada','$asig','$cursado','$profesor','$semes','$nota[$i]')";
		
			mysql_query($sql2,$conex);
			$i++;
			
			echo $sql2;
		
}	

			
}
}	
	
?>

<p>
<p><a href="menu.php" class="cerrar">MENU PRINCIPAL</a>
<p>
<p>
<p><a href="Index.php" class="cerrar">CERRAR SESION</a>
</body>
</html>
