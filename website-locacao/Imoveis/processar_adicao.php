<?php
include "config.php";

$tipo = $_POST["tipo"];
$endereco = $_POST["endereco"];
$preco = $_POST["preco"];

$sql = "INSERT INTO imoveis (tipo, endereco, preco) VALUES ('$tipo', '$endereco', '$preco')";

if ($conexao->query($sql) === TRUE) {
    header("Location: pgnImoveis.php");
    exit();
} else {
    echo "Erro ao adicionar imóvel: " . $conexao->error;
}

$conexao->close();
?>