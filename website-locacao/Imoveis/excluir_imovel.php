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
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .success-message {
            color: #4CAF50;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .error-message {
            color: #FF0000;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffa500;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #ff8c00;
        }
    </style>

    <?php
    include "config.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM imoveis WHERE id = $id";

        if ($conexao->query($sql) === TRUE) {
            echo "<h2>Imóvel excluído com sucesso.</h2>";
            echo "<a href='pgnImoveis.php' class='button'>Voltar para a Lista de Imóveis</a>";
        } else {
            echo "<h2 class='error-message'>Erro ao excluir imóvel: " . $conexao->error . "</h2>";
        }
    } else {
        echo "<h2 class='error-message'>ID do imóvel não fornecido.</h2>";
    }

    $conexao->close();
    ?>
</body>
</html>