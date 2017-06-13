<?php

    $host="mysql.hostinger.es";
    $user="u816397581_yuyu";
    $pass="7681860";
    $db="u816397581_prueb";
    $mydb = new mysqli($host, $user, $pass, $db) or die ("unable to create");

    $nuevo_titulo = $_GET["titulo"];
    $nuevo_autor = $_GET["autor"];
    $nuevo_paginas = $_GET["paginas"];
    
    $sql_insert = "INSERT INTO LIBROS(titulo, autor, paginas) VALUES('".$nuevo_titulo."', '".$nuevo_autor."', '".$nuevo_paginas."')";              "usuario', '$password')";

    $result = mysqli_query($mydb, $sql_insert);

    header("Location: http://yuyu.esy.es/evidencias/pag3.php");
?>