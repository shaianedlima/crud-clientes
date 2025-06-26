<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $sql = "INSERT INTO clientes (nome, telefone, endereco) VALUES ('$nome', '$telefone', '$endereco')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cliente cadastrado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validarFormulario() {
            var nome = document.forms["formCliente"]["nome"].value;
            var telefone = document.forms["formCliente"]["telefone"].value;
            var endereco = document.forms["formCliente"]["endereco"].value;

            if (nome == "") {
                alert("Por favor, preencha o nome do cliente.");
                return false;
            }
            if (telefone == "") {
                alert("Por favor, preencha o telefone do cliente.");
                return false;
            }
            if (endereco == "") {
                alert("Por favor, preencha o endereço do cliente.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form name="formCliente" method="post" action="create.php" onsubmit="return validarFormulario();">
        Nome: <input type="text" name="nome"><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        Endereço: <input type="text" name="endereco"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Voltar para a lista</a>
</body>
</html>
