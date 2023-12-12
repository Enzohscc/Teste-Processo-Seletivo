<!-- Inclusão do BANCO DE DADOS -->
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
    <!-- Cabeçalho responsivo com um menu de navegação -->
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

    <!-- Seção de container para os imóveis -->
    <section class="container">
        <div class="property-section">
            <?php
            $sql = "SELECT * FROM imoveis";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='property-card'>";
                    echo "<img src='casa" . $row["id"] . ".jpg' alt='" . $row["tipo"] . "'>";
                    echo "<p class='property-description'>" . $row["tipo"] . " - " . $row["endereco"] . "</p>";
                    echo "<p class='property-price'>Valor: R$ " . $row["preco"] . "</p>";
                    echo "<a class='btnED' href='editar_imovel.php?id=" . $row["id"] . "'>Editar</a>";
                    echo "<a class='btnED' href='excluir_imovel.php?id=" . $row["id"] . "'>Excluir</a>";
                    echo "</div>";
                }
            } else {
                echo "<p>Nenhum imóvel encontrado.</p>";
            }
            ?>

            <div class="property-card">
                <a href="adicionar_imovel.php">
                    <button>Adicionar Imóvel</button>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Rodapé -->
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