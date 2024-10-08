<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gerador de PDF</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="imagex/png" href="img/icone.png">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h1>Gerador de PDF</h1>

    <div class="container">
        <!-- Formulário para enviar o texto -->
        <form action="gerar_pdf.php" method="POST">
            <!-- Input para o título -->
            <input type="text" id="titulo" name="titulo" placeholder="Digite o título" required>
            <br><br>

            <!-- Select para o alinhamento do texto -->
            <label for="alinhamento">Escolha o alinhamento do texto:</label>
            <select id="alinhamento" name="alinhamento">
                <option value="L">Esquerda</option>
                <option value="C">Centralizado</option>
                <option value="R">Direita</option>
            </select>
            <br><br>

            <!-- Área de texto para o conteúdo -->
            <textarea id="campoTexto" name="texto" rows="10" cols="50" placeholder="Digite seu texto aqui..." class="campo-texto" oninput="verificarTexto()"></textarea>
            <br>

            <!-- Botão de submissão -->
            <button id="botaoGerarPDF" type="submit" disabled>Gerar PDF</button>
        </form>
    </div>

    <footer>
        <div align="center" class="credit">
            <a href="https://grupo.jm7087.com" class="cor-link-rodape">Grupo JM7087</a>
            © Copyright 2010-
            <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>
            . Todos os direitos reservados. Desenvolvido <span class="cor-nome-dev-rodape">João Marcos</span><span
                class="texto-rodape">.
        </div>
    </footer>

    <script src="script.js"> </script>

</body>

</html>
