<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>Execício</title>
</head>
<body>
<header>
    <?php
        include 'header.php';
    ?>
</header>

<?php
// Ficheiro: substituicao_string.php

$frase = "Estou a frequentar o módulo 5 da disciplina de RC";

// a. Altera a palavra “RC” por “PSI”
$frase_modificada = str_replace("RC", "PSI", $frase);

// Exibir o resultado
echo "Frase original: $frase<br>";
echo "Frase modificada: $frase_modificada";
?>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
</body>
</html>