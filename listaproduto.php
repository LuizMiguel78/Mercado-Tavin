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

$sql = "SELECT * FROM produto";
$produto = $conexao -> query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>descricao</th>
                <th>preco</th>
                <th>estoque</th>
                <th>categoria</th>
               
            </tr>
        </thead>
        <tbody>
        <?php
            while($produto_data = mysqli_fetch_assoc($produto)){
                echo "<tr>";
                echo "<td>" .$produto_data['id']."</td>";
                echo "<td>" .$produto_data['nome']."</td>";
                echo "<td>" .$produto_data['descricao']."</td>";
                echo "<td>" .$produto_data['preco']."</td>";
                echo "<td>" .$produto_data['estoque']."</td>";
                echo "<td>" .$produto_data['categoria']."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

</body>
</html>