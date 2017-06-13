<?php
	
	header('Content-Type: text/html; charset=UTF-8');


	$host="mysql.hostinger.es";
	$user="u816397581_yuyu";
	$pass="7681860";
	$db="u816397581_prueb";
	$mydb = new mysqli($host, $user, $pass, $db) or die ("unable to create");


	$usuario_nombre = $_GET["nombre_usuario"];
	$libro_nombre = $_GET["titulo_libro"];

	$sql_usuario = "select * from USUARIOS where usuario ='".$usuario_nombre."'";
	$sql_libro = "select * from LIBROS where titulo ='".$libro_nombre."'";

	$result_usuario = mysqli_query($mydb, $sql_usuario);
	$result_libro = mysqli_query($mydb, $sql_libro);

	$array_usuario = [];
	$array_libro = [];

    if(mysqli_num_rows($result_usuario)){while($row=mysqli_fetch_row($result_usuario)){$array_usuario[]=$row;}}

    if(mysqli_num_rows($result_libro)){while($row=mysqli_fetch_row($result_libro)){$array_libro[]=$row;}}

    //echo json_encode($array);

    $db_id_usuario = $array_usuario[0] [0];
    $db_id_libro = $array_libro[0] [0];

    $sql_insert_prestamo = "INSERT INTO PRESTAMOS(id_libro, id_usuario) VALUES('".$db_id_libro."', '".$db_id_usuario."')";
    $result_prestamo = mysqli_query($mydb, $sql_insert_prestamo);




	header("Location: http://yuyu.esy.es/evidencias/editar.php");
?>