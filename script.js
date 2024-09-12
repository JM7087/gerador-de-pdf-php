 // Função que verifica se o campo de texto está vazio ou não
 function verificarTexto() {
    const campoTexto = document.getElementById("campoTexto");
    const botaoGerarPDF = document.getElementById("botaoGerarPDF");

    // Se o campo de texto tiver conteúdo, habilita o botão
    if (campoTexto.value.trim() !== "") {
        botaoGerarPDF.disabled = false;
    } else {
        // Caso contrário, desabilita o botão
        botaoGerarPDF.disabled = true;
    }
}