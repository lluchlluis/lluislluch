

<?php
	header('Content-Type: text/html; charset=UTF-8');
?>
<html>
	<head>
		<meta Content-Type="test/html">
		<meta charset="UTF-8">
	</head>





<body>

	Welcome <?php echo $_GET["name"]; ?><br>
	Your email address is: <?php echo $_GET["email"]; ?>

<?php
	$host="mysql.hostinger.es";
	$user="u816397581_yuyu";
	$pass="7681860";
	$db="u816397581_prueb";
	$mydb = new mysqli($host, $user, $pass, $db) or die ("unable to create");

	$nombre = $_GET['nombre'];
	$pellido = $_GET['apellido'];
	$apellido1 = $_GET['apellido1'];
	$email = $_GET['email'];
	$usuario = $_GET['usuario'];
    $password = $_GET['pass'];
    $md5_pass = md5($password);


    $sql_usuario = "select * from USUARIOS where nombre ='".$usuario."'";
    $sql_id = "select id_usuario from USUARIOS where nombre ='".$usuario."'"; // slect insert
    $result_usuario = mysqli_query($mydb, $sql_usuario);
    $array_succes = [];
    $array_id = [];
    
        //0=nil
        //1=register succes
        //2= nombre de usuario ya existente
        //3= no se ha podido registrar el usuario

    if(mysqli_num_rows($result_usuario)==0){
        $sql_insert = "INSERT INTO USUARIOS(nombre, apellido, apellido1, email, usuario, pass) VALUES('$nombre', '$apellido', '$apellido1', '$email', '$usuario', '$md5_pass')";
        $result_insert = mysqli_query($mydb, $sql_insert);
        if($result_insert){
            $result_id = mysqli_query($mydb, $sql_id);
            if(mysqli_num_rows($result_id)){while($row=mysqli_fetch_row($result_id)){$array_id[]=$row;}}
            $array_succes[0] [0] = "1";
            $array_succes[0] [1] = $array_id[0] [0];
            echo json_encode($array_succes);

            session_start();
            if (!isset($_SESSION['registro'])) {
              $_SESSION['registro'] = "usuario registrado";
            }
            

            header("Location: http://yuyu.esy.es/evidencias/index.php");
        } else{
            $array_succes[0] [0] = "3";
            $array_succes[0] [1] = "NILL";
            echo json_encode($array_succes);
        }
    } else {
        $array_succes[0] [0] = "2";
        $array_succes[0] [1] = "NILL";
        echo json_encode($array_succes);
    }
?>


</body>
</html>


	