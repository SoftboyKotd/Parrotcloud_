<?php
   function connect() {
      $host = "127.0.0.1";     // endereço do servidor
      $db   = "parrotcloud_";  // nome do banco de dados
      $user = "root";          // usuário do banco
      $pass = "";              // senha do usuário

      /* Attempt to connect to MySQL database */
      $link = mysqli_connect("$host","$user","$pass","$db") or die ("ERROR: CONNECTION FAILED");
        
      // Check connection
      if($link === false){
         die("ERROR: Could not connect. " . mysqli_connect_error());
      }
    }
 ?>