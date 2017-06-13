<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<html>
    <head>
        <meta Content-Type="test/html">
        <meta charset="UTF-8">
        <script src="js/main.js"></script>
        <script src="recursos/jquery/jquery-2.1.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

        <script>
          
          window.onload = query();
        </script>

    </head>
<body>

  <?php

      $host="mysql.hostinger.es";
      $user="u816397581_yuyu";
      $pass="7681860";
      $db="u816397581_prueb";
      $mydb = new mysqli($host, $user, $pass, $db) or die ("unable to create");


      $usuario_login = $_GET["usuario_login"];
      $pass_login = $_GET["pass_login"];

      $sql = "select * from USUARIOS where usuario ='".$usuario_login."'"; // slect insert
      $result = mysqli_query($mydb, $sql);

      $array = [];

      if(mysqli_num_rows($result)){while($row=mysqli_fetch_row($result)){$array[]=$row;}}

      //echo json_encode($array);


      $db_password = $array[0] [6];
      $db_username = $array[0] [5];
      $db_id = $array[0] [0];
           //0=nil
           //1=login succes
           //2= nombre de usuario incorrecto
           //3= contraseña incorrecta
      $array_succes = [];

      if($usuario_login == $db_username){
          if($pass_login == $db_password){
            $array_succes[0] [0] = "1";
            $array_succes[0] [1] = $db_id;
            //echo json_encode($array_succes);
            //echo " ";
            //echo json_encode($array_succes[0] [1]);   
          
          } else{
                $array_succes[0] [0] = "3";
                $array_succes[0] [1] = "NIL";
                echo json_encode($array_succes);
           
          }
      } else{
           $array_succes[0] [0] = "2";
           $array_succes[0] [1] = "NIL";
           echo json_encode($array_succes);
                
      }       
  ?>







  <div data-role="header">
      <h1>Añadir libro</h1>
      <br>
  </div>

  <form action="nuevo_libro.php" method="get">
    Titulo: <input type="text" name="titulo"><br><br>
    Autor: <input type="text" name="autor"><br><br>
    Páginas: <input type="text" name="paginas"><br><br>
  <input type="submit"><br><br>
  </form>

  
  <div id="db_libros"><b>Libros:</b></div>
  
  <div><form action="eliminar_libro.php" method="get">
    Introduzca título del libro para eliminar <input type="text" name="eliminar_libro">&nbsp;&nbsp;<input type="submit">
  </form> </div>&nbsp;</div>
  <div data-role="header">
    <h1>Usuarios</h1>
    <b>Añadir usuario:</b>
    <br>&nbsp;<br>
  </div>

  <form action="pag2.php" method="get">
    Nombre: <input type="text" name="nombre"><br><br>
    Primer apellido: <input type="text" name="apellido"><br><br>
    Segundo apellido: <input type="text" name="apellido1"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    Nombre de usuario: <input type="text" name="usuario"><br><br>
    Password: <input type="text" name="pass"><br><br>
  <input type="submit"><br><br>
  </form>

  <div><button type="button" onclick="query_usuarios();"><b><b><b>Mostrar usuarios</button></div>
  <div id="db_usuarios"><b><br><br></b></div>

  <div><form action="eliminar_usuario.php" method="get">
    Introduzca nombre de usuario para eliminar <input type="text" name="eliminar_usuario">&nbsp;&nbsp;<input type="submit"><br><br>    
  </form> </div>&nbsp;</div>

  <div data-role="header">
    <h1>Prestamos</h1>
    <b>Introduzca los datos para añadir prestamo:</b>
    <br>&nbsp;<br>
  </div>

  <form action="prestamo.php" method="get">
    Nombre de usuario: <input type="text" name="nombre_usuario"><br><br>
    Título del libro: <input type="text" name="titulo_libro"><br><br>
  <input type="submit"><br><br>
  </form>
  <div><button type="button" onclick="query_prestamos();"><b><b><b>Mostrar prestamos</button></div>
  <div id="db_prestamos"><b><br><br></b></div>


</body>
</html>
