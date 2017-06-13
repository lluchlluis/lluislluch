Los php's:
- pag2.php --> Registro de usuarios (antes comprueba que el usuario no exista), 
               se obtiene una respuesta en forma de array que indica: 
                 1= register succes
                 2= nombre de usuario ya existente
                 3= no se ha podido registrar el usuario
                 
- pag3.php --> Login, con un array de respuesta del mismo tipo
                 1= login succes
                 2= nombre de usuario incorrecto
                 3= contraseña incorrecta
                 
               Esta pagina es la primera que tiene una lista de libros
               
- editar.php --> Seria la consola donde editar la base de datos.

- servidor.php --> Solo realiza la consulta de la tabla LIBROS

- los demas documentos son más simples y tienen un nombre claro.
