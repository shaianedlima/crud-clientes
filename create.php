<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $conn->query("INSERT INTO clientes (nome, telefone, endereco) VALUES ('$nome', '$telefone', '$endereco')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form method="post">
        Nome: <input type="text" name="nome" required><br>
        Telefone: <input type="text" name="telefone"><br>
        Endereço: <input type="text" name="endereco"><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
