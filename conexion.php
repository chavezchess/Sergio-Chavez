
<?php
$conex=mysql_connect("localhost:3306","root","123");
mysql_select_db("notas2010",$conex);


//contar datos.

$sql = "SELECT COUNT(*) FROM alumno;";
$rst = mysql_query( $sql ) or die( mysql_error() );
$row = mysql_fetch_row( $rst );
$totalRows = $row[0]; 
	
//Formato de Foto
?>

	
	
	