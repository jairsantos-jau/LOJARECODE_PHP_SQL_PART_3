<?php
include "conexao.php";

$nome=$_POST['nome'];
$msg=$_POST['msg'];
$data=$_POST['data'];

 
    $conn = mysqli_connect($servename, $username, $password, $database);   
   // $sql = "INSERT INTO comentario (data,nome, msg) VALUES ('$data', '$nome', '$msg')"; 
   // $result = mysqli_query($conn, $sql);
       

   
 
   $conn = mysqli_connect($servename, $username, $password, $database);   
   $sql = "INSERT INTO comentario (data,nome, msg) VALUES ('$data', '$nome', '$msg')"; 
   $result = mysqli_query($conn, $sql);

    $sql = "select * from comentario";
    $result = $conn->query($sql);

    if($result ->num_rows>0){
        while($rows = $result->fetch_assoc()){
           
            echo "Nome:",$rows['nome'], "<br>";
            echo "Mensagem:",$rows['msg'], "<br>";
            echo "Data:",$rows['data'], "<br>  <hr>";
        }
    }else{
        echo "nehum comentario ainda";
    }

?>
