<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Estilo2 {color: #000000}
.Estilo7 {
	font-size: 12px;
	font-weight: bold;
}
.Estilo8 {color: #FFFFFF; font-family: "Arial Rounded MT Bold"; }
.Estilo16 {font-size: 16px; color: #000000; }
.Estilo10 {font-family: "Arial Rounded MT Bold";
	font-size: 18px;
	font-weight: bold;
	color: #0000CC;
	font-style: italic;
}
.Estilo30 {font-size: 18px; font-family: "Arial Rounded MT Bold"; }
.Estilo33 {font-size: 12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo34 {font-size: 14px}
.Estilo4 {font-size: 18px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo35 {
	font-size: 14px;
	font-family: "Arial Rounded MT Bold";
	font-style: italic;
}
body,td,th {
	color: #000000;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #666666;
	text-decoration: none;
}
a:hover {
	color: #0000FF;
	text-decoration: none;
}
a:active {
	color: #0000FF;
	text-decoration: none;
}
.Estilo12 {color: #666666;
	font-family: "Arial Rounded MT Bold";
}
-->
</style>
</head>
<body>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="IMAGEN/CFTT.jpg" alt="img" width="1000" height="200" /></td>
  </tr>
</table>
<hr />
<p align="center" class="Estilo30"><a href="Menu/Alumno00.php">Alumno</a> |<a href="Menu/Profesor00.php"> Profesor </a>| <a href="Menu/Carrera00.php" class="enlacenav">Carrera</a> | <a href="Menu/Ramos00.php">Ramos</a> | <a href="Menu/menu.php" class="enlacenav Estilo34">Menu</a> | <span class="Estilo33">Cerrar Sesi&oacute;n </span></p>
<hr class="Estilo4" />
<p align="center"><span class="Estilo10">Lista de Todos los Alumnos de la Instituci&oacute;n </span></p>
<table width="1177" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <tr >
      <td height="31" colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  class="Estilo16"><div align="left"><span class="Estilo35">Para volver al menu de constexto de Alumno elija la opcion del menu superior 
        </span><span class="Estilo10">
        <?php
include("conexion.php");

$ITEMS_PAGINA = 5;
if (empty($_GET["pagina"])) {
 $inicio = 0;
 $pagina=1;
}
else {
 $pagina = $_GET["pagina"];
 $inicio = ($pagina - 1) * $ITEMS_PAGINA;
}

$sentencia="select * from alumno,carrera,jornada where carrera.CARR_ID = alumno.CARR_ID AND jornada.JORN_ID = alumno.JORN_ID order by ALUM_NOMBRE";
$res=mysql_query($sentencia,$conex);
$num_total_registros=mysql_num_rows($res);
$total_paginas = ceil($num_total_registros / $ITEMS_PAGINA);
$sentencia_modificada=$sentencia." limit " . $inicio . "," . $ITEMS_PAGINA;
$res=mysql_query($sentencia_modificada,$conex);


if(!(isset($_GET["pagpagina"])))
{
    $pagpagina=1;
}
else
{
    $pagpagina=$_GET["pagpagina"];
}               
$PAGINAS_AGRUPADAS=5;
$totalpp=ceil($total_paginas / $PAGINAS_AGRUPADAS);
$inip=$pagpagina*$PAGINAS_AGRUPADAS-$PAGINAS_AGRUPADAS+1;
$finp=$inip+$PAGINAS_AGRUPADAS-1;

?>
      </span></div></td>
      <td height="31" colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  class="Estilo16"><div align="center"><?php echo "Total de Alumnos:  ".$totalRows; ?></div></td>
    </tr>
    <tr bordercolor="#333333" >
      <td width="139" height="31" bgcolor="#333333"><div align="center" class="Estilo8">
        <div align="center">Rut</div>
      </div></td>
      <td width="398" bgcolor="#333333"><div align="center" class="Estilo8">
        <div align="center">Nombre Completo </div>
      </div></td>
      <td width="216" bgcolor="#333333"><div align="center" class="Estilo8">
        <div align="center">Carrera</div>
      </div></td>
      <td width="166" bgcolor="#333333"><div align="center" class="Estilo8">
        <div align="center">Jornada</div>
      </div></td>
      <td width="137" bgcolor="#333333"><div align="center" class="Estilo8">
        <div align="center">A&ntilde;o de Ingreso </div>
      </div></td>
      <td width="107" bgcolor="#333333"><div align="center" class="Estilo8">
        <div align="center">Fono</div>
      </div></td>
    </tr>
    <?php

	while ($reg=mysql_fetch_array($res))
	{
	
	?>
    <tr>
      <td height="64" bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="center" class="Estilo2"><span class="Estilo7"></span> <?php echo $reg["ALUM_RUT"];?></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="left" class="Estilo2"><?php echo $reg["ALUM_NOMBRE"];?></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="center" class="Estilo2"><?php echo $reg["CARR_NOMBRE"];?></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="center" class="Estilo2"><?php echo $reg["JORN_NOMBRE"];?></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="center" class="Estilo2"><?php echo $reg["ALUM_INGRESO"];?></div></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="center" class="Estilo2"><?php echo $reg["ALUM_FONO"];?></div></td>
    </tr>
    <?php	
		}		
?>
</table>
  <p align="center" class="Estilo2"><?php
 if ($total_paginas > 1)
 {
    if($pagpagina>1)
	{
        echo "<a href='alumtodos.php?pagina=1&pagpagina=1' style=\"text-decoration:none;\">  <<  </a>";
        echo "<a href='alumtodos.php?pagina=".($inip-$PAGINAS_AGRUPADAS)."&pagpagina=".($pagpagina-1)."' style=\"text-decoration:none;\">  <  </a>";
    }   
    for ($i=$inip;(($i<=$total_paginas)&&($i<=$finp));$i++)
	{
        if ($i>$inip)
		{
            print(" - ");
        }
        if ($pagina == $i) 
            echo "<b>".$pagina."</b>";
        else
      echo "<a href='alumtodos.php?pagina=".$i."&pagpagina=".$pagpagina."'>".$i."</a> ";
    }
    if($pagpagina < $totalpp)
	{
        echo "<a href='alumtodos.php?pagina=".($inip+$PAGINAS_AGRUPADAS)."&pagpagina=".($pagpagina+1)."' style=\"text-decoration:none;\">  >  </a>";
        echo "<a href='alumtodos.php?pagina=".$total_paginas."&pagpagina=".$totalpp."' style=\"text-decoration:none;\">  >>  </a>";
    }   
}

 ?>
  </p>
  <p align="center" class="Estilo2"><span class="Estilo12">Sistema SIGE realizado por CFT Andres Bello Cede Angol &copy; 2010</a></span></p>
  <p align="center" class="Estilo2">&nbsp;</p>
  </div>
</body>
</html>
