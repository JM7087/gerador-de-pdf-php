﻿# Sistema de Geração de PDF

Este é um sistema simples de geração de PDFs em PHP utilizando a biblioteca FPDF. O sistema permite ao usuário inserir um texto em um formulário, gerar um PDF com esse texto, e adicionar um rodapé personalizado em cada página.

## Funcionalidades

- Geração de PDF a partir de um campo de texto.
- Adição automática de rodapé personalizado com ano dinâmico e nome do desenvolvedor em todas as páginas.
- Botão de gerar PDF desabilitado até que haja texto no campo.
- Suporte a caracteres acentuados e especiais no PDF.

<h2 align="center">Capturas de Tela</h2>

<p align="center">
  <img src="https://blogger.googleusercontent.com/img/a/AVvXsEg876g1adIvSKHewRltJWdzGMebhPYgwiHnNJtJ_Y5KdQi3Xni5A6SV9pTE0KTH--WWe6Q_ArZpqU-XvWa6ZGy_NurYYuUfVLOkOY4A3o7wQo0FcC3zPv04Hiw8axF3_E56RlBmmT_LOogukHmfIEdtqkpSqscZi0H5htngsNZav0M4SE2WCrMTrUE0DI7W" width="800">
</p>

<h2 align="center">Exemplo do PDF Gerado</h2>

<p align="center">
  <img src="https://blogger.googleusercontent.com/img/a/AVvXsEilJl8b-NAtJ1-AUqPNs4lMqxQLfli3TX_Iq4LNf7r0wx1IeExE7k8v-jO1faUZL-B-Q7kWsfxkS6OJNSXVlONPZaECkBq759vJV4pKHsF8rphCfM8zcEprQctNQdoOrPYo-guqz3YCXRrdHVHEydHwBV7SBWOhCKSi9q6Bbyvt5KqkAE00xKIzMEt9WpZG" width="800">
</p>

## Pré-requisitos

- PHP 7.4 ou superior
- Biblioteca [FPDF](http://www.fpdf.org/)

## Instalação

1. Clone o repositório em sua máquina:

   ```bash
   git clone https://github.com/JM7087/gerador-de-pdf-php.git
   ```

2. Navegue até a pasta do projeto:

   ```bash
   cd seu-repositorio
   ```

3. Certifique-se de que o arquivo `fpdf.php` está na pasta correta, geralmente no diretório `fpdf/` dentro do projeto.

## Como Usar

1. Acesse o sistema pelo navegador através de um servidor local (como XAMPP, WAMP ou LAMP) ou use o servido do PHP.

 comado para usar o servidor embutido do PHP
 ```bash
 php -s localhost:8000
 ```

2. Na página principal, insira o texto no campo e clique no botão "Gerar PDF". O botão ficará desabilitado até que o campo de texto seja preenchido.

3. O PDF gerado será baixado automaticamente.

## Estrutura do Projeto

- `index.php`: Página principal do sistema com o formulário para inserção de texto.
- `gerar_pdf.php`: Script responsável por gerar o PDF com base no texto inserido.
- `fpdf/`: Pasta que contém a biblioteca FPDF.
- `styles.css`: Arquivo de estilos da interface.
- `script.js`: Lógica JavaScript para habilitar/desabilitar o botão de geração de PDF.

## Rodapé Personalizado

O rodapé do PDF é gerado automaticamente com o seguinte formato:

```
Grupo JM7087 © Copyright 2010-[ANO ATUAL]. Todos os direitos reservados. Desenvolvido por João Marcos.
```

O ano é gerado automaticamente com base no ano atual.

## Tecnologias Utilizadas

- PHP
- FPDF
- HTML/CSS
- JavaScript

## Contribuições

Sinta-se à vontade para contribuir com o projeto! Basta seguir os passos abaixo:

1. Faça um fork do projeto.
2. Crie uma branch para sua feature (`git checkout -b minha-feature`).
3. Faça commit das suas mudanças (`git commit -m 'Adiciona nova feature'`).
4. Faça push para a branch (`git push origin minha-feature`).
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

## Créditos

- Desenvolvido por [João Marcos](https://links.jm7087.com)
