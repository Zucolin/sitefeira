<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <title>Mensagem Enviada</title>
        <link rel='stylesheet' href='css/style5.css'>
    </head>
    <body>
        <nav>
            <a href='#'><img src='img/logo.png' alt='Logo' /></a>
            <ul>
              <li><a href='index.html'>Início</a></li>
              <li><a href='palestra.html'>Cadastrar Palestra</a></li>
              <li><a href='cadastro.html'>Inscrição</a></li>
              <li><a href='contato.html'>Contato</a></li>
            </ul>
        </nav>

        <div class='container'>
            <h2>Mensagem enviada com sucesso!</h2>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mensagem:</strong> $mensagem</p>
        </div>
    </body>
    </html>";
}
?>
