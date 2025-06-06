<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <?php 
        /*
            Faça um algoritmo que leia a largura e altura de uma parede, calcule e mostre a área a ser pintada e a quantidade de tinta necessária para o serviço, sabendo que cada litro de tinta pinta uma área de 2metros quadrados.
        */

        $largura = 20;
        $altura = 30;

        $area = $largura * $altura;
        $tinta = $area / 2;

        echo "A área é $area <br>";
        echo "Quantidade de tinta necessária: $tinta litros";
    ?>
</body>
</html>