<?php
$dbHost = '127.0.0.1:3306';
$dbUserName = 'root';
$dbPassword ='senai.123';
$dbName ='techmaster_db';

$conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);

/* if($conexao -> connect_errno){
    echo ("Erro de conexão");
}else{
    echo("Conexão realizada com sucesso");
} */

if(isset($_POST['submit']))
{
    $nome = $_POST['nome'];
    $descricao = $_POST ['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST ['estoque'];
    $categoria = $_POST ['categoria'];

    $produto = mysqli_query($conexao, "INSERT INTO produto(nome,descricao,preco,estoque,categoria)  values ('$nome','$descricao','$preco','$estoque','$categoria')");
   
}
?>
<!DOCTYPE html>
<html lang="pt - br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
   <link rel="stylesheet" href="style.css">
   
    
</head>
<header>
    <div class="tavin"> 
        <a href="telainicial.HTML"><img src="Mercado tavin.jpg" width="320" height="205"></a>
    </div>
<a href="listaproduto.php">Lista Produto</a>
</header>
<body>
   
    <form action="produto.php" method="POST">
        <label for="nome">Nome</label> <br>
        <input type="text" name="nome" id="nome"><br>

         <label for="descricao">Descricao</label><br>
        <input type="text" name="descricao" id="descricao"><br>

         <label for="preco">Preco</label><br>
        <input type="text" name="preco" id="preco"><br>

         <label for="estoque">Estoque</label><br>
        <input type="text" name="estoque" id="estoque"><br>

         <label for="categoria">Categoria</label><br>
        <input type="text" name="categoria" id="categoria"><br>


        <input type="submit" name="submit">
    </form>

</body>
</html>