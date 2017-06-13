function show_books(resp){
  
  for(i=0; i<= resp.length ; i++){
    document.getElementById("db_libros").innerHTML += "<ul><li>" + resp[i][1] + " de " + resp[i] [2] + "</li></ul>";
  }
}

function show_users(resp1){
  
  for(i=0; i<= resp1.length ; i++){
    document.getElementById("db_usuarios").innerHTML += "<ul><li>Usuario:  " + resp1[i][1] + "  con id:  " + resp1[i] [0] + "</li></ul>";
  } 
}

function show_prestamos(resp2){
  
  for(i=0; i<= resp2.length ; i++){
    document.getElementById("db_prestamos").innerHTML += "<ul><li>Id libro:  " + resp2[i][0] + "    Id usuario:  " + resp2[i][1] + "</li></ul>";
  } 
}


function query(){
 
 $.ajax({  
       type: "GET",  
       url: "http://yuyu.esy.es/evidencias/servidor.php",  
       dataType: "json",  
       
       success: function(resp){
        console.log(resp);
        show_books(resp);

       },  
       error: function(e){  
         alert('Error121212: ' + e);  
       }  
     });
  
}

function query_usuarios(){
 
 $.ajax({  
   type: "GET",  
   url: "http://yuyu.esy.es/evidencias/table_usuarios.php",  
   dataType: "json",  
   
   success: function(resp1){
    console.log(resp1);
    show_users(resp1);
    

   },  
   error: function(e){  
     alert('Error121212: ' + e);  
   }  
  });  
}

function query_prestamos(){
 
 $.ajax({  
   type: "GET",  
   url: "http://yuyu.esy.es/evidencias/mostrar_prestamos.php",  
   dataType: "json",  
   
   success: function(resp2){
    console.log(resp2);
    show_prestamos(resp2);
    
   },  
   error: function(e){  
     alert('Error121212: ' + e);  
   }  
  });  
}