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
$a = 99;
$b = 1.23;

$resultado = $a * $b;

echo "Valor s/iva: " . $a . "<br>";
echo "Valor c/iva" . $resultado;
?> 
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
</body>
</html>