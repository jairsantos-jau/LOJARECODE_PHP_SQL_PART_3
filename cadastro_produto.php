
<?php
include "conexao.php";

$categoria=$_POST['categoria'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$precofinal=$_POST['precofinal'];
$imagem=$_POST['imagem'];

    
 
    $conn = mysqli_connect($servename, $username, $password, $database);   
    $sql = "INSERT INTO produto (categoria,descricao, preco, precofinal,imagem) VALUES ('$categoria', '$descricao', '$preco', '$precofinal', '$imagem')"; 
    $result = mysqli_query($conn, $sql);
       