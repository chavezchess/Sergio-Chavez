<html>
<head>
<title>
</title>

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
-->
</style>


<script type="text/javascript" src="select_dependientes.js"></script>
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


function seleccionar(){ 
    var largo=document.form2.sel2.length;
	for(i=0;i<largo;i++)
	{
		document.form2.sel2.options[i].selected=true;
	}  
	alert(largo);
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

</head>
<body>
<tr>
<td>&nbsp;</td>
</tr>

<?php

include("menuinclude.php");
include("conexion.php");


		
function generacarreras()
{
	
	$consulta=mysql_query("SELECT CARR_ID, CARR_NOMBRE FROM carrera");
	//desconectar();

	// Voy imprimiendo el primer select compuesto por los paises
	echo "<select name='carreras' id='carreras' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Elige</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}

if (!isset($_POST['btbuscar']) && (!isset($_POST['btguardar2'])))
{
?>


<form name="formulario" action="" method="post">


<table width="628" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <tr>
      <td height="29" colspan="2" bgcolor="#333333"><div align="center" class="Estilo35 Estilo36 Estilo54"><span class="Estilo9"><strong>Elija los Datos que desea asignar </strong></span></div></td>
    </tr>
    <tr>
      <td colspan="2" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="center"><span class="Estilo15"><span class="Estilo45"><img src="IMAGEN/index/images.jpg" width="24" height="16" /></span> <span class="Estilo12">*</span> <span class="Estilo16">dato obligatorio </span></span></div></td>
    </tr>
    <tr>
      <td width="228" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="right" class="Estilo51"><strong>Carrera</strong></div></td>
      <td width="390" bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53"><span class="Estilo12">
      <div id="demoIzq"><?php generacarreras(); ?>* </div>
</span></span></td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="right" class="Estilo51"><span class="Estilo53"><strong>Alumnos</strong></span></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53">
        <label></label>
        <span class="Estilo12">
<select disabled="disabled" name="alumnos" id="alumnos">
						<option value="0">Selecciona opci&oacute;n...</option>
					</select>
*        </span></span></td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="right" class="Estilo53"><strong>Jornada</strong></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53"><span class="Estilo12">
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
        *
      
      </span></span></td>
    </tr>
    <tr>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><div align="right" class="Estilo53"><strong><span class="Estilo51">A&ntilde;o cursado </span></strong></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#CCCCCC"><span class="Estilo53">
        <select name="lisanocursado" id="lisanocursado">
          <?php
	
	$sql= " select * From alumno order by ALUM_INGRESO";
	$consulta= mysql_query($sql,$conex);
	while($fila=mysql_fetch_array($consulta))
	{
	echo "<option value=".$fila['ALUM_INGRESO'].">".$fila['ALUM_INGRESO']."</option>";
	}
	?>
        </select>
      <span class="Estilo12">* </span></span></td>
    </tr>
  </table>


<center><input name="btbuscar" type="submit" class="BOTONES" value="BUSCAR" >
  <label></label>
</center>
</form>

<?php



}
else if (isset($_POST['btbuscar']) && (!isset($_POST['btguardar2'])))
{

//$nombrecarr=$_POST['txtnombrecarrera'];
//$nombreprofesor=$_POST['lisprofesor'];
$nombrejornada=$_POST['lisjornada'];
$nombrecarrera=$_POST['liscarrera'];
$nombreañocursado=$_POST['lisanocursado'];

$sql="select * from carrera where CARR_ID like '%".$nombrecarrera."%'";
$resultado=mysql_query($sql,$conex);
?>
<center>

DATOS ELEGIDOS PARA INGRESAR RAMOS
<p>

<form name="form2" action="" method="post">
RUT:
  <input type="hidden" name="txrut" value="<?php echo $_POST['alumnos']; ?>">

  <?php echo $_POST['alumnos']; ?>
  


		
	
JORNADA
<input type="hidden" name="txjornada" value="<?php echo $_POST['lisjornada']; ?>" />


<?php echo $_POST['lisjornada']; ?> <p>



		
		

CARRERA
<input type="hidden" name="txcarr" value="<?php echo $_POST['carreras']; ?>" >
<?php echo $_POST['carreras']; ?>
A&Ntilde;O CURSADO
<input type="hidden" name="txtanocursado" value="<?php echo $_POST['lisanocursado']; ?>" >
<?php echo $_POST['lisanocursado']; ?>
<p>		
		
		
    <table width="629" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
    <tr>
      <td height="21" bordercolor="#333333" bgcolor="#333333"><div align="center"><span class="Estilo9">Ramos de la Carrera </span><span class="Estilo12">* </span></div></td>
      <td width="129" bordercolor="#333333" bgcolor="#333333"><div align="center" class="Estilo9">Seleccion</div></td>
      <td bordercolor="#333333" bgcolor="#333333"><div align="center"><span class="Estilo9">Ramos Elejidos </span><span class="Estilo12">* </span></div></td>
    </tr>
    
    <tr>
      <td width="228" rowspan="3" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><div align="center">
        <select name="sel1" size="10" id="sel1">
     <?php 
	  
   $CARR=$_POST['carreras'];
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
      <td height="26" colspan="3" bordercolor="#333333" bgcolor="#333333"><div align="center"><span class="Estilo9">Para alamacenar los datos ingresados presione el boton guardar </span></div></td>
    </tr>
    <tr>
      <td height="26" colspan="3" bordercolor="#333333" bgcolor="#333333"><label></label>
          <div align="center">
            <input name="btguardar2" type="submit" id="btguardar2" value="Guardar" onClick="seleccionar();" />
          </div>
        <div align="right"></div></td>
    </tr>
  </table>	
		
    <label></label>
</form>	

<?php
}
if (isset($_POST['btguardar2']))
{

$alum=$_POST['txrut'];
$jorn=$_POST['txjornada'];
//$carr=$_POST['txtcarrera'];
$cursado=$_POST['txtanocursado'];

$ramo=$_POST['sel2'];


foreach($ramo as $id)
{

$sql2= "INSERT INTO alumno_asignatura(ALUM_RUT,JORN_ID,ASIG_ID,ALUM_AÑOCURSADO) VALUES ('$alum','$jorn','$id','$cursado')";
		
			mysql_query($sql2,$conex);
}						
}		
?>		
 
</center>

<p>
  
<p>
<p><a href="ingresaramosalumnos.php" class="cerrar">VOLVER ATRAS</a> <p><a href="menu.php" class="cerrar">MENU PRINCIPAL</a>
</body>
</html>
