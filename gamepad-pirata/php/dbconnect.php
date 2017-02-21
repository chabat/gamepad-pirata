<?php
    if(!$con=pg_connect("host=localhost user=chabat password=chabat dbname=chabat"))
        echo"<br>Erro ao conectar a base de dados!";
?>
