<?php
	$host="mysql.hostinger.es";
	$user="u816397581_yuyu";
	$pass="7681860";
	$db="u816397581_prueb";
	$mydb = new mysqli($host, $user, $pass, $db) or die ("unable to create");

	$sql = "select * from USUARIOS";
	$result = mysqli_query($mydb, $sql);

	$array_usuarios = [];

    if(mysqli_num_rows($result)){while($row=mysqli_fetch_row($result)){$array_usuarios[]=$row;}}

    header('Content-type: application/json; UTF-8');
    echo json_encode($array_usuarios);
?>