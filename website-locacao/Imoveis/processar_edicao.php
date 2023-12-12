<?php
include "config.php";

$id = $_POST["id"];
$tipo = $_POST["tipo"];
$endereco = $_POST["endereco"];
$preco = $_POST["preco"];

$sql = "UPDATE imoveis SET tipo='$tipo', endereco='$endereco', preco='$preco' WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    header("Location: pgnImoveis.php");
    exit();
} else {
    echo "Erro ao editar imóvel: " . $conexao->error;
}

$conexao->close();
?>