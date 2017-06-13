<?php
	
	header('Content-Type: text/html; charset=UTF-8');


	$host="mysql.hostinger.es";
	$user="u816397581_yuyu";
	$pass="7681860";
	$db="u816397581_prueb";
	$mydb = new mysqli($host, $user, $pass, $db) or die ("unable to create");

	$user = $_GET["eliminar_usuario"];
	$sql = "DELETE FROM USUARIOS WHERE usuario='".$user."'";
	$result = mysqli_query($mydb, $sql);

	header("Location: http://yuyu.esy.es/evidencias/editar.php");
?>