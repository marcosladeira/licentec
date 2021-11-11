<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'junior457';
    $db_name = 'licentec_db';   

    $conn = new MySQLi($host, $user, $pass, $db_name);
    if ($conn->connect_error) {
        die("Erro ao conectar ao DB " . $conn->connect_error);
    }
?>