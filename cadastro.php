<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);

    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <title>Cadastro Realizado</title>
        <link rel='stylesheet' href='cadastro.css'>
    </head>
    <body>
        <nav>
          <a href='index.html'><img src='img/logo.png'></a>
          <ul>
              <li><a href='index.html'>Início</a></li>
              <li><a href='camada2.html'>Palestra</a></li>
              <li><a href='cadastro.html'>Cadastro</a></li>
              <li><a href='#'>Contato</a></li>
              <li><a href='#'>Mapa</a></li>
          </ul>
        </nav>
        <div class='container'>
          <div class='bloco-transparente'>
            <h2>Palestra cadastrada com sucesso!</h2>
            <a href='cadastro_participante.html'><button>Voltar</button></a>
          </div>
        </div>
    </body>
    </html>";
}
?>