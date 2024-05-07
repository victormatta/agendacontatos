<?php

try{
    $host = "localhost";
    $user = "root";
    $db = "agenda";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn) {
    //     echo "Deu certo!";
    // }

}catch(PDOException $e) {
    echo "<br><br> Error: " . $e->getMessage();
}