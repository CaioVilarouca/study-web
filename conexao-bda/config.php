<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasevername = "banco";

    $icon = new mysqli($servername, $username, $passowrd, $dbaservername);

    if ($icon -> connect_error){
        die ("conecexão morreu ".$conn->connect_error);
    }
    else{
        echo "Conectou";
    }
?>