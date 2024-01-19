<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execício</title>
</head>
<body>
<header>
    <?php
        include 'header.php';
    ?>
</header>

<?php
// Ficheiro: manipulacao_strings.php

$pais = "Portugal";

// a. O quarto e quinto caracter
$quarto_e_quinto = substr($pais, 3, 2);

// b. A quantidade de caracteres
$qtd_caracteres = strlen($pais);

// c. Converter para maiúsculas
$maiuculas = strtoupper($pais);

// Exibir os resultados
echo "a. Quarto e quinto caracter: $quarto_e_quinto<br>";
echo "b. Quantidade de caracteres: $qtd_caracteres<br>";
echo "c. Texto em maiúsculas: $maiuculas";
?> 
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
</body>
</html>