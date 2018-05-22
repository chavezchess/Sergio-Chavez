<?php
session_start();
//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','root','123')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('notas2010')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}
if(trim($HTTP_POST_VARS["usuario"]) != "" && trim($HTTP_POST_VARS["password"]) != "")
{
	// Puedes utilizar la funcion para eliminar algun caracter en especifico
	//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
	//$password = $HTTP_POST_VARS["password"];
	// o puedes convertir los a su entidad HTML aplicable con htmlentities
	$usuario = strtolower(htmlentities($HTTP_POST_VARS["usuario"], ENT_QUOTES));
	$tipo = strtolower(htmlentities($HTTP_POST_VARS["cmbTipo"], ENT_QUOTES));
	$password = $HTTP_POST_VARS["password"];
	$result = mysql_query('SELECT password, usuario,tipo_id FROM usuarios WHERE usuario=\''.$usuario.'\'');
	if($row = mysql_fetch_array($result)){
		if($row["password"] == $password){
			$_SESSION["k_username"] = $row['usuario'];
			session_start();
$_SESSION['USUARIO']= $usuario;



if($row["tipo_id"]== 'Administrador')
{

header('location: Menu/menu.php');
}

elseif($row["tipo_id"]== 'Profesor') 
{
header('location: Menu2.php');
}


else
{
header('location: Menu3.php');
}


			
			//echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
			//echo '<a href="Principal.php">Menu Principal</a></p>';
			//Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
			/*Ingreso exitoso, ahora sera dirigido a la pagina principal.
			<SCRIPT LANGUAGE="javascript">
			location.href = "index.php";
			</SCRIPT>*/
		}else{
			echo 'Password incorrecto';
			echo '<p>';
			echo '<a href="login.php">Atras</a></p>';
		}
	}else{
		echo 'Usuario no existente en la base de datos';
		echo '<p>';
		echo '<a href="login.php">Atras</a></p>';
	}
	mysql_free_result($result);
}else{
	echo 'Debe especificar un usuario y password';
	echo '<p>';
	echo '<a href="login.php">Atras</a></p>';
}
mysql_close();
?>