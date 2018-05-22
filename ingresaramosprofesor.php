<html>
<head>
<title></title>
<style type="text/css">
<!--
.uno {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 14px;
	background-color: #FFFFFF;
}
.dos {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	font-style: normal;
	font-weight: bold;
	background-color: #FFFFFF;
	color: #0033FF;
}
.tres {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FF0033;
	text-decoration: underline;
	background-color: #99FF66;
}
.cuatro{
	font-family: "Times New Roman", Times, serif;
	background-color: #FF0000;
	border: 2;
	color: #00FFFF;
}
body {
	background-image: url(Fondu.JPG);
}
.cinco {
	font-family: Arial, Helvetica, sans-serif;
	font-size: xx-small;
	font-weight: bold;
	background-color: #FFFFFF;
}
.Estilo1 {color: #FFFFFF}
.Estilo2 {color: #FF0000}
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
.Estilo5 {font-family: "Arial Rounded MT Bold"}
.Estilo6 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo15 {font-family: "Arial Rounded MT Bold";
	font-size: 24;
}
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo33 {font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo35 {	font-family: "Arial Rounded MT Bold";
	font-size: 14px;
}
.Estilo4 {font-size: 18px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo7 {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo8 {font-family: "Arial Rounded MT Bold"; font-size: 24px; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<tr>
<td><table width="200" border="0" align="center">
  <tr>
    <td><img src="IMAGEN/CFTT.jpg" alt="img" width="1000" height="200" /></td>
  </tr>
</table>
  <hr />
  <p align="center" class="Estilo15"><span class="Estilo30"><a href="Menu/Alumno00.php">Alumno</a> |<a href="Menu/Profesor00.php"> Profesor </a>| <a href="Menu/Carrera00.php" class="enlacenav">Carrera</a> | <a href="Menu/Ramos00.php">Ramos</a> | </span><span class="Estilo35"><a href="Menu/menu.php" class="enlacenav ">Menu</a></span><span class="Estilo30"> | <span class="Estilo33">Cerrar Sesi&oacute;n </span></span></p>
  <hr class="Estilo4" /></td>
</tr>

<script type="text/javascript">

function pasar() {
    obj=document.getElementById('sel1');
    if (obj.selectedIndex==-1) return;
    valor=obj.value;
    txt=obj.options[obj.selectedIndex].text;
    obj.options[obj.selectedIndex]=null;
    obj2=document.getElementById('sel2');
    opc = new Option(txt,valor);
    eval(obj2.options[obj2.options.length]=opc);    
}

function seleccionar(){ 
    var largo=document.form2.sel2.length;
	for(i=0;i<largo;i++)
	{
		document.form2.sel2.options[i].selected=true;
	}  
	alert(largo);
	} 


function pasarizq() {
    obj=document.getElementById('sel2');
    if (obj.selectedIndex==-1) return;
    valor=obj.value;
    txt=obj.options[obj.selectedIndex].text;
    obj.options[obj.selectedIndex]=null;
    obj2=document.getElementById('sel1');
    opc = new Option(txt,valor);
    eval(obj2.options[obj2.options.length]=opc);    
}

function createCrossSelecter() {		
			buttons = '<div class="jqxs_buttons">';
			if(!pars.clickSelects)
			{
			buttons+= '<input type="button" value="'+pars.select_txt+'" class="jqxs_selectButton" disabled="disabled"></input><input type="button" value="'+pars.remove_txt+'" class="jqxs_removeButton" disabled="disabled"></input>';
			}
			buttons +='<input type="button" value="'+pars.selectAll_txt+'" class="jqxs_selectAllButton"';
			if ($('option:not([selected=true])',select).size() === 0)
			{
				buttons+=' disabled="disabled"';
			}		
			buttons+='></input><input type="button" value="'+pars.removeAll_txt+'" class="jqxs_removeAllButton"';
			var test = $('option',select);
			if ($('option[selected=true]',select).size() === 0)
			{
				buttons+=' disabled="disabled"';
			}		
			buttons+='></input></div>'
			$(context).append(optionsList + buttons + chosenList +'<div style="clear:left;"></div>');
			$('ul', context).css({height: dimensions['height'],width:dimensions['width']});
			if (pars.horizontal === 'hide')
			{
				$('ul', context).css({'overflow-x': 'hidden'});
			}
		}
	</script>
	
	
	
	
<form name="formulario" action="" method="post">


<p align="center">
  <?php
include("conexion.php");

if (!isset($_POST['btbuscar']) && (!isset($_POST['btguardar2'])))
{
?>
</p>
<table width="669" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <tr>
      <td height="29" colspan="3" bgcolor="#333333"><div align="center" class="Estilo9 Estilo1 Estilo5">Elija los Datos que desea para asignar los ramos al Profesor </div></td>
    </tr>
    <tr>
      <td colspan="3" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="center"><span class="Estilo15"><span class="Estilo45"><img src="IMAGEN/index/images.jpg" width="24" height="16" /></span> <span class="Estilo12 Estilo2">*</span> <span class="Estilo16 Estilo7"><strong>dato obligatorio </strong></span></span></div></td>
    </tr>
    <tr>
      <td width="228" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="right" class="Estilo51"><strong>Profesor</strong></div></td>
      <td width="292" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53">
        <select name="lisprofesor" id="lisprofesor">
          <?php
	
	$sql= " select * From profesor order by PROF_NOMBRE";
	$consulta= mysql_query($sql,$conex);
	while($fila=mysql_fetch_array($consulta))
	{
	echo "<option value=".$fila['PROF_RUT'].">".$fila['PROF_NOMBRE']."</option>";
	}
	?>
        </select>
        <span class="Estilo12 Estilo2">* </span></span></td>
      <td width="135" rowspan="3" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53">
        <label></label>
      </span>
      <div align="right"><img src="IMAGEN/26872_1377502518257_1252683696_1083401_8187634_n.jpg" width="134" height="69" border="0" usemap="#Map"></div></td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="right" class="Estilo51"><span class="Estilo53"><strong>Jornada</strong></span></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53">
        <select name="lisjornada" id="lisjornada">
          <?php
	
	$sql= " select * From jornada order by JORN_NOMBRE";
	$consulta= mysql_query($sql,$conex);
	while($fila=mysql_fetch_array($consulta))
	{
	echo "<option value=".$fila['JORN_ID'].">".$fila['JORN_NOMBRE']."</option>";
	}
	?>
        </select>
        <span class="Estilo12 Estilo2">* </span></span></td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="right"><span class="Estilo53"><strong><span class="Estilo51">Carrera</span></strong></span></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53">
        <select name="liscarrera" id="liscarrera">
          <?php
	
	$sql= " select * From carrera order by CARR_NOMBRE";
	$consulta= mysql_query($sql,$conex);
	while($fila=mysql_fetch_array($consulta))
	{
	echo "<option value=".$fila['CARR_ID'].">".$fila['CARR_NOMBRE']."</option>";
	}
	?>
        </select>
        <span class="Estilo12 Estilo2">* </span></span></td>
    </tr>
    <tr>
      <td colspan="3" bordercolor="#FFFFFF" bgcolor="#333333"><div align="center" class="Estilo1">Para volver al menu conxtectual haga Click en imagen del costado derecho </div></td>
    </tr>
    <tr>
      <td colspan="3" bordercolor="#FFFFFF" bgcolor="#333333"><div align="right" class="Estilo53">
        <div align="center">
          <input name="btbuscar" type="submit" class="BOTONES" value="BUSCAR" >
        </div>
      </div>        <div align="center"></div></td>
    </tr>
  </table>


<center>
</center>
</form>

<div align="center">
  <?php

}
else if (isset($_POST['btbuscar']) && (!isset($_POST['btguardar2'])))
{

//$nombrecarr=$_POST['txtnombrecarrera'];
$nombreprofesor=$_POST['lisprofesor'];
$nombrejornada=$_POST['lisjornada'];
$nombrecarrera=$_POST['liscarrera'];

$sql="select * from carrera where CARR_ID=CARR_NOMBRE";
$resultado=mysql_query($sql,$conex);
?>
</div>
<center>

  <p class="Estilo8">DATOS ELEGIDOS PARA INGRESAR RAMOS</p>
  <p class="Estilo5">
    <input type="hidden" name="txtprofesor" value="<?php echo $_POST['lisprofesor']; ?>" >
    <input type="hidden" name="txtjornada" value="<?php echo $_POST['lisjornada']; ?>" >
    <input type="hidden" name="txtcarrera" value="<?php echo $_POST['liscarrera']; ?>" >
</p>
  <form name="form2" action="" method="post">
    <table width="629" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
    <tr>
      <td height="21" bordercolor="#333333" bgcolor="#333333"><div align="center" class="Estilo1"><span class="Estilo9">Ramos de la Carrera </span><span class="Estilo12 Estilo2">* </span></div></td>
      <td width="129" bordercolor="#333333" bgcolor="#333333"><div align="center" class="Estilo9 Estilo1">Seleccion</div></td>
      <td bordercolor="#333333" bgcolor="#333333"><div align="center" class="Estilo1"><span class="Estilo9">Ramos Elejidos </span><span class="Estilo12 Estilo2">* </span></div></td>
    </tr>
    
    <tr>
      <td width="228" rowspan="3" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><div align="center">
        <select name="sel1" size="10" id="sel1">
     <?php 
	  
   $CARR=$_POST['liscarrera'];
		  		  echo $CARR;
		$sql= " select * From asignatura where  CARR_ID = '$CARR'  order by CARR_ID";
	$consulta= mysql_query($sql,$conex);
	while($fila=mysql_fetch_array($consulta))
	{
		echo "<option value=".$fila['ASIG_ID'].">".$fila['ASIG_NOMBRE']."</option>";
		}
	
	?>
        </select>
      </div>      <label></label></td>
      <td height="86" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><label></label>
          <div align="center">
            <input name="button" type="button" onClick="pasar()" value="---&gt;" />
      </div></td>
      <td width="258" rowspan="3" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><label>
        <div align="center">
          <select name="sel2[]" size="10" multiple id="sel2">
          </select>
        </div></td>
    </tr>
    <tr>
      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><label>
          <div align="center">
            <input name="button2" type="button" onClick="pasarizq()" value="&lt;---" />
          </div>
        </label></td>
    </tr>
    <tr>
      <td height="21" bordercolor="#CCCCCC" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    
    <tr>
      <td height="26" colspan="3" bordercolor="#333333" bgcolor="#333333"><div align="center"><span class="Estilo9 Estilo1 Estilo6">Para alamacenar los datos ingresados presione el boton guardar </span></div></td>
    </tr>
    <tr>
      <td height="26" colspan="3" bordercolor="#333333" bgcolor="#333333"><label></label>
          <div align="center">
            <input name="btguardar2" type="submit" id="btguardar2" value="Guardar" onClick="seleccionar();"/>
          </div>
        <div align="right"></div></td>
    </tr>
  </table>	
		
  </form>	

<?php
}
if (isset($_POST['btguardar2']))
{

$prof=$_POST['txtprofesor'];
$jorn=$_POST['txtjornada'];
//$carr=$_POST['txtcarrera'];

$ramo=$_POST['sel2'];

foreach($ramo as $id)
{
$sql= "INSERT INTO profesor_asignatura(PROF_RUT,JORN_ID,ASIG_ID) VALUES ('$prof','$jorn','$id')";
		
			mysql_query($sql,$conex);
			
						
}
}	
?>
<strong><a href="ingresaramosprofesor.php" class="cerrar">VOLVER ATRAS</a></strong> 
</center>

<p><a href="menu.php" class="cerrar"></a>

<map name="Map"><area shape="rect" coords="2,1,134,74" href="Menu/Profesor00.php" alt="Volver A menu Profesor">
</map></body>
</html>
