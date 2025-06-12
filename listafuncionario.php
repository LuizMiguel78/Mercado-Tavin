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

$sql = "SELECT * FROM funcionario";
$funcionario = $conexao -> query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista funcionario</title>
    <link rel="stylesheet" href="style.CSS">
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
                <th>data_admissao</th>
               
            </tr>
        </thead>
        <tbody>
        <?php
            while($funcionario_data = mysqli_fetch_assoc($funcionario)){
                echo "<tr>";
                echo "<td>" .$funcionario_data['id']."</td>";
                echo "<td>" .$funcionario_data['nome']."</td>";
                echo "<td>" .$funcionario_data['cpf']."</td>";
                echo "<td>" .$funcionario_data['telefone']."</td>";
                echo "<td>" .$funcionario_data['email']."</td>";
                echo "<td>" .$funcionario_data['data_admissao']."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

</body>
</html>
