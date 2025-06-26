<?php
include 'db.php';
$codigo = $_GET['codigo'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $conn->query("UPDATE clientes SET nome='$nome', telefone='$telefone', endereco='$endereco' WHERE codigo=$codigo");
    header("Location: index.php");
} else {
    $result = $conn->query("SELECT * FROM clientes WHERE codigo=$codigo");
    $cliente = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form method="post">
        Nome: <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required><br>
        Telefone: <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>"><br>
        Endereço: <input type="text" name="endereco" value="<?= $cliente['endereco'] ?>"><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
