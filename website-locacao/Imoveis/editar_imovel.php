<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $sql = "SELECT * FROM imoveis WHERE id = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tipo = $row['tipo'];
        $endereco = $row['endereco'];
        $preco = $row['preco'];
    } else {
        echo "Imóvel não encontrado.";
        exit();
    }
} else {
    echo "ID do imóvel não fornecido.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>eHz: Locadora de Imoveis</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h2 {
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #ffa500;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #ffa500;
    }

    a {
        display: block;
        margin-top: 16px;
        text-decoration: none;
        color: #333;
    }

    a:hover {
        color: #ffa500;
    }
    </style>
    
    <h2 style="display:flex; justify-content:center">Editar Imóvel</h2>

    <form action="processar_edicao.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            Tipo: <input type="text" name="tipo" value="<?php echo $tipo; ?>" required><br>
            Endereço: <input type="text" name="endereco" value="<?php echo $endereco; ?>" required><br>
            Preço: <input type="text" name="preco" value="<?php echo $preco; ?>" required><br>
        <input type="submit" value="Salvar Alterações">
    </form>

    <br>
    <a href="pgnImoveis.php" style="display:flex; justify-content:center">Voltar para a Lista de Imóveis</a>
</body>
</html>