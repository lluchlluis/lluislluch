<html>
<title>Inicio</title>

<!-- Include the jQuery library -->
<head>
		<meta Content-Type="test/html">
		<meta charset="UTF-8">

		<script src="recursos/jquery/jquery-2.1.0.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>


</head>
    

<body>
	
	<div class="form-group">
	<div data-role="page">

  		<div data-role="header">
    		<h1>Login</h1>
    		<br>
  		</div>

<form class="form-inline" action="pag3.php" method="get">
	<div class="form-group">
		<label for="usuario_login">Nombre de usuario:</label>
    	<input class="form-control" id="usuario_login" name="usuario_login">
    	<label for="pass_login">Password:</label>
    	<input class="form-control" id="pass_login" name="pass_login">
    <input type="submit">
    <br><br>
    <br>
  	</div>

<div data-role="header">
    <h1>Registrarse</h1>
    <br>
</div>
</form>
<form action="pag2.php" method="get">
	Nombre: <input type="text" name="nombre"><br><br>
	Primer apellido: <input type="text" name="apellido"><br><br>
	Segundo apellido: <input type="text" name="apellido1"><br><br>
	E-mail: <input type="text" name="email"><br><br>
	Nombre de usuario: <input type="text" name="usuario"><br><br>
	Password: <input type="text" name="pass"><br>
	<input type="submit">
</form>



<?php
	
	session_start();

	// En otro fichero o en el mismo:

    echo $_SESSION['registro'] . ".<br>";
    // Se cierra sesión (de manera controlada).
    echo $array_succes;
    session_destroy(); 
    


?>

</body>
</html>