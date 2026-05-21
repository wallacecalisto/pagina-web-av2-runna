<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $db_name = "usuarios";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    echo "";
?>
<!-- por o mesmo no do banco de dados na hora de criar  usuarios-->