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

    // Recupera o texto enviado pelo formulário
    $texto = $_POST['texto'];

    // Cria uma nova instância da classe personalizada
    $pdf = new PDF();
    $pdf->AddPage();

    // Define a fonte para o corpo do PDF
    $pdf->SetFont('Arial', '', 12);

    // Adiciona o texto ao PDF com conversão para ISO-8859-1
    $pdf->MultiCell(0, 10, utf8_decode($texto));

    // Gera codigo aleatorio
    $horas = date("H:i:s"); 

    // Gera o PDF e força o download
    $pdf->Output('D', "arquivo_pdf_gerado-$horas.pdf");
}
