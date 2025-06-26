<?php
include 'db.php';
$result = $conn->query("SELECT * FROM clientes");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Clientes</h1>
    <a href="create.php">Cadastrar Novo Cliente</a>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['codigo'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['telefone'] ?></td>
            <td><?= $row['endereco'] ?></td>
            <td>
                <a href="edit.php?codigo=<?= $row['codigo'] ?>">Editar</a> |
                <a href="delete.php?codigo=<?= $row['codigo'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
