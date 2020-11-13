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
<!--Criação da estrutura inicial do projeto em container. 

Criação de menu usando as classes .nav 

Uso das classes de cores nos objetos principais. 

Utilização de classes em tabelas ou formulários. -->

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

<!--fim container-->
          <!--FIM MENU-->
        <hr>
        
        <div class="container">
            <center> <h2 class="text-danger">Contatos</h2>
        <table border="0" width="100%" cellpadding="20">
            <tr>
        <td width="20%">
            <td width="20%" align="center" class="text-danger">
                <img src="./imagens/iconemail.png" width="20px">
                contatoelectro.com
            </td>
            <td width="20%" align="center" class="text-danger">
                <img src="./imagens/iconzap.png" width="20px">
                (11)98888-7777
            </td>
        </td> 
        </tr>
        </table> 
       <!--formulario para entra em contatos-->
       <form action="cadastrocontato.php" method="POST">
        <div class="form-group">
            <label for="nome">NOME:</label>
            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome" require placeholder="Seu nome">
            
        </div>

        <div class="form-group">
            <label for="data">DATA:</label>
            <input name="data" type="date" class="form-control" id="data" aria-describedby="data" require placeholder="Se telefone">
        
          </div>
          <div class="form-group">
            <label for="msg">COMENTARIOS:</label>
           <textarea name="msg" class="form-control">
            Deixe se comentario):
           </textarea>
          </div>

        

        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>


       </center>
        <center>
        <p id="formas_pagamentos" class="font-weight-bold">Formas de pagamento</p>
        </center>
        <img src="./imagens/formas-pagamento.png" alt="Formas de pagamento" class="mx-auto d-block" style="width:30%">

    </div>
        </body>
</html>

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
