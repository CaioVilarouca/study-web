<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbasename = "aula";
  
      // Criar conexão com MySQL
      $conecte = new mysqli($servername, $username, $password, $dbasename);
  
      // Checar a conexão
      if($conecte->connect_error){
          die("conecexão morreu ".$conn->connect_error);
      }      

      // Conexão agora está aberta....
      echo "Conectou ao banco de dados: [". $dbasename. "]";
?>