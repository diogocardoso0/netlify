<!DOCTYPE html> <!-- Define a versão do HTML que estamos a usar(no caso, HTML5) -->

<html lang="pt-pt"> <!-- é uma indicação mais específica do idioma, 
					"pt.pt" é interpretado como "Português de Portugal" -->

<!-- informações sobre o documento, como metadados e referências a scripts e estilos -->
<head>

	<!-- Define a codificação de caracteres como UTF-8 para suportar caracteres especiais -->
    <meta charset="UTF-8">
	
	<!-- Define a escala inicial da página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Define o título da página (texto que aparece na aba do navegador) -->
    <title>Título da Página</title>
	
	<!-- Define o icon da página (imagem que aparece na aba do navegador) -->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- código para adicionar múltiplos tamanhos de favicon -->

	<!-- Link para um arquivo externo de folha de estilo (CSS) -->
    <link rel="stylesheet" href="css/style.css">
	
</head>

<!-- todo o conteúdo visível da página -->
<body>
	<!--  Geralmente contém o cabeçalho da página, 
	que pode incluir o logotipo, menu de navegação, etc. -->

   
	<header>
	<?php
include 'header.php';
?>

</header>
	<!-- conteúdo principal da página -->
    <main>


    </main>

	<!-- informações do rodapé da página -->
    <footer>
	<?php
include 'footer.php';
?>

    </footer>

</body>
</html>