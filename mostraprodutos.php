<!DOCTYPE html>
        <html lang="pt-br">
        <head>
          <title>Full_electro</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
        <div class="container p-3 my-3 bg-dark text-white">
            
                 <!--INICIO MENU-->
                 <table width="100%" class="menu">
                    <tr>
                        <td align="center" width="25%"><a href="index.html"><img src="./imagens/logorecodepro.png" width="100px" alt="games"></a></td>
                        <td align="center" width="25%"><a href="produtos.html">Produtos</a></td>
                        <td align="center" width="25%"><a href="loja.html">Nossas lojas</a></td>
                        <td align="center" width="25%"><a href="contato.html">Contato</a></td>
                    </tr>
                </table>
</div>
        
        <!--fim container-->
                  <!--FIM MENU-->
                <hr>
                
          
</div>

<?php
include "conexao.php";
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
 
    $sql = "select categoria,descricao,preco,precofinal,imagem from produto";
    $result =$conn->query($sql);

    while ($row=$result->fetch_assoc()) {
        //print_r($row); trazer um array
        echo "<div class=container>";
        echo "CATEGORIA :" .$row["categoria"]."<br> DESCRICAO :".$row["descricao"]."<br> PRECO :".$row["preco"]."<br> PRECO FINAL :".$row["precofinal"]."<br> IMAGEM DO PRODUTO :".$row["imagem"];
        echo "<hr>";
        echo "</div>";
    }

    mysqli_close($conn);
    


?>