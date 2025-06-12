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
    $cpf = $_POST ['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST ['email'];
    $data_admissao = $_POST ['data_admissao'];

    $funcionario = mysqli_query($conexao, "INSERT INTO funcionario(nome,cpf,telefone,email,data_admissao)  values ('$nome','$cpf','$telefone','$email','$data_admissao')");
   
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcionario</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <div class="tavin"> 
        <a href="telainicial.HTML"><img src="Mercado tavin.jpg" width="320" height="205"></a>
    </div>
    <a href="listafuncionario.php">Lista Funcionario</a>

</header>
<body>
    
    <form action="funcionario.php" method="POST">
        <label for="nome">Nome</label> <br>
        <input type="text" name="nome" id="nome"><br>

         <label for="cpf">CPF</label><br>
        <input type="text" name="cpf" id="cpf"><br>

         <label for="telefone">Telefone</label><br>
        <input type="text" name="telefone" id="telefone"><br>

         <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><br>

        <label for="data_admissao">Data_admissao</label><br>
        <input type="text" name="data_admissao" id="data_admissao"><br>

        <input type="submit" name="submit">
    </form>

</body>
</html>