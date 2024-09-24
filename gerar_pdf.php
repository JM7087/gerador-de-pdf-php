<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Inclui a biblioteca FPDF
    require('fpdf/fpdf.php');

    // Classe personalizada para adicionar cabeçalhos e rodapés
    class PDF extends FPDF
    {
        // Sobrescreve o método Footer para adicionar o rodapé
        function Footer()
        {
            // Posição a 1,5 cm do fim da página
            $this->SetY(-15);
            
            // Define a fonte do rodapé
            $this->SetFont('Arial', 'I', 10);
            
            // Texto do rodapé
            $anoAtual = date('Y');
            $rodape = "Grupo JM7087 © Copyright 2010-{$anoAtual}. Todos os direitos reservados. Desenvolvido por João Marcos.";
            
            // Adiciona o rodapé no centro da página com conversão para ISO-8859-1
            $this->Cell(0, 10, utf8_decode($rodape), 0, 0, 'C');
        }
    }

    // Recupera o título, texto e alinhamento enviados pelo formulário
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $alinhamento = $_POST['alinhamento']; // Pode ser 'L' (esquerda), 'C' (centralizado) ou 'R' (direita)

    // Cria uma nova instância da classe personalizada
    $pdf = new PDF();
    $pdf->AddPage();

    // Define a fonte para o título e centraliza
    $pdf->SetFont('Arial', 'B', 35);
    $pdf->Cell(0, 20, utf8_decode($titulo), 0, 1, 'C'); // Título centralizado
    $pdf->Ln(10); // Adiciona uma linha em branco

    // Define a fonte para o texto
    $pdf->SetFont('Arial', '', 12);

    // Adiciona o texto ao PDF com o alinhamento escolhido
    $pdf->MultiCell(0, 10, utf8_decode($texto), 0, $alinhamento);

    // Gera código aleatório para o nome do arquivo
    $horas = date("H:i:s");

    // Gera o PDF e força o download
    $pdf->Output('D', "arquivo_pdf_gerado-$horas.pdf");
}
