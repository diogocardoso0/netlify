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
$x = 17;
$y = 8;

$quociente = intdiv($x, $y);
$resto = $x % $y;

echo "Quociente: " . $quociente . "<br>";
echo "Resto: " . $resto;
?> 
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
</body>
</html>