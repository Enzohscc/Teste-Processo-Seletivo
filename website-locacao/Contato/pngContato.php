<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>eHz: Locadora de Imoveis</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../Contato/pgnContato.css'>
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

    <!-- Formulario de Contato -->
    <div class="container" style="margin-top:10rem;">
        <form action="https://formspree.io/f/meqbynld" method="POST">
            <label>Digite seu email:
                <input type="email" name="email">
            </label>
            <label> Sua mensagem:
                <textarea name="message"></textarea>
            </label>
            <button type="submit">Enviar</button>
        </form>
    </div>

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
    <script src='../Contato/pgnContato.js'></script>
</body>