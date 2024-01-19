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
$nota_a = 23;  
$nota_b = 45;
$nota_c = 15;

$nota_soma = $nota_a + $nota_b + $nota_c;
$nota_media = $nota_soma / 3;
echo $nota_media

?>  
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
</body>
</html>