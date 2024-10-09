<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "registro";

    $conecte = new mysqli($servername, $username, $password, $dbasename);

    if($conecte->connect_error){
        die("conecexão morreu ".$conn->connect_error);
    }      
    echo "Conectou ao banco de dados: [". $dbasename. "]";
?>