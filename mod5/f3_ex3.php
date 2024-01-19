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
  // Array
  $array = array("amarelo", "azul", "branco", "preto");

  // Copiar o valor da segunda posição do array para a variável segundo
  $segundo = $array[2];

  // Exibir os resultados
  echo "O segundo elemento do array: $segundo";
  ?>

<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
</body>

</html>