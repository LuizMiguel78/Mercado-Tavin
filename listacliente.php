<?php
$dbHost = '127.0.0.1:3306';
$dbUserName = 'root';
$dbPassword ='senai.123';
$dbName ='techmaster_db';

$conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);


/*  if($conexao -> connect_errno){
    echo ("Erro de conexão");
}else{
    echo("Conexão realizada com sucesso");
}  */

$sql = "SELECT * FROM cliente";
$cliente = $conexao -> query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>cpf</th>
                <th>telefone</th>
                <th>email</th>
                <th>endereco</th>
               
            </tr>
        </thead>
        <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($cliente)){
                echo "<tr>";
                echo "<td>" .$user_data['id']."</td>";
                echo "<td>" .$user_data['nome']."</td>";
                echo "<td>" .$user_data['cpf']."</td>";
                echo "<td>" .$user_data['telefone']."</td>";
                echo "<td>" .$user_data['email']."</td>";
                echo "<td>" .$user_data['endereco']."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

</body>
</html>