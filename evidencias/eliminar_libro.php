<?php
	
	header('Content-Type: text/html; charset=UTF-8');


	$host="mysql.hostinger.es";
	$user="u816397581_yuyu";
	$pass="7681860";
	$db="u816397581_prueb";
	$mydb = new mysqli($host, $user, $pass, $db) or die ("unable to create");

	$libro = $_GET["eliminar_libro"];
	$sql = "DELETE FROM LIBROS WHERE titulo='".$libro."'";
	$result = mysqli_query($mydb, $sql);

	header("Location: http://yuyu.esy.es/evidencias/editar.php");
?>