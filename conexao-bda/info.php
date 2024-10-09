<?php
    include "conexao.php";

    $sql = "CREATE TABLE pessoas (matricula int not null, prinome varchar(50), sgnome varchar(50), nota double(4,2), primary key(matricula))";

    if ($conecte->query($sql) === TRUE) {
        echo " Tabela criada com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conecte->error;
    }
?>