<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>eHz: Locadora de Imoveis</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../Imoveis/pgnImoveis.css'>
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

    <header class="header-responsivo">
        <div><img src="../imgs/mini-logo.png" class="logo"></div>
        <nav class="nav-bar">
            <ul class="nav-links-1234">
                <li><a href="../Home/pgnInicial.html">Início</a></li>
                <li><a href="../Imoveis/pgnImoveis.php">Imóveis</a></li>
                <li><a href="../About/pgnSobre.html">Sobre Nós</a></li>
                <li><a href="../Contato/pngContato.php">Contato</a></li>
            </ul>
            <div class="button-container-1234">
                <a class="button-1234" href="#">Cadastro</a>
                <a class="button-1234" href="#">Login</a>
            </div>
            <a href="#" ><img src="../imgs/mini-perfil-logo.png" alt="Mini Perfil Logo" class="logo"></a>
            <div class="burger-menu">&#9776;</div>
        </nav>
    </header>

    <h2 style="display:flex; justify-content:center">Adicionar Novo Imóvel</h2>

    <form action="processar_adicao.php" method="post">
        Tipo: <input type="text" name="tipo" required><br>
        Endereço: <input type="text" name="endereco" required><br>
        Preço: <input type="text" name="preco" required><br>
        <input type="submit" value="Adicionar Imóvel">
    </form>

    <br>
    <a href="pgnImoveis.php" style="display:flex; justify-content:center">Voltar para a Lista de Imóveis</a>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="../imgs/mini-logo.png" alt="Logo da Empresa">
            </div>
            <div class="footer-contact">
                <p>Endereço da Empresa</p>
                <p>Cidade, Estado, CEP</p>
                <p>Telefone: (xx) xxxxx-xxxx</p>
                <p>E-mail: contato@exemplo.com</p>
                <p>Website: <a href="http://www.exemplo.com" target="_blank">www.exemplo.com</a></p>
            </div>
            <div class="footer-social">
                <p>Siga-nos nas redes sociais:</p> 
            </div>
        </div>
    </footer>
    <script src='../Imoveis/pgnImoveis.js'></script>
</body>