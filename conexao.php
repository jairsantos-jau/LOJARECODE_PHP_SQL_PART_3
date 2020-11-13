<?php
    //localhost
    $servename ="localhost";
    //username
    $username = "root";
    //password
    $password = "usbw";
    //database
    $database = "loja";

    //criar conexao
    $conn = mysqli_connect($servename,
                           $username,
                           $password,
                           $database);

    //verificar conexao
    if (!$conn){
        die("A conexao ao BD falhou:" .mysqli_connect_erro());
    }
 

?>