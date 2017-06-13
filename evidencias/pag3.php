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
      $pass_login_md5 = md5($pass_login);

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
          if($pass_login_md5 == $db_password){
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



  <br><br>

  <div data-role="header">
    <h1>Lista de libros</h1>
</div>
  <br>
  <div id="db_libros"><b>Libros:</b></div>
  <br>
  <button type="button" onclick="location.href='editar.php'">Editar lista</button>

</body>
</html>


