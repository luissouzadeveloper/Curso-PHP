<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
    <?php 
        /*
            Crie um programa que leia o preço de um produto, calcule e mostre o seu PREÇO PROMOCIONAL, com 5% de desconto.
        */

        function calculaPromocao($preco) {
            $desconto = ($preco * 5) / 100;
            $precoComDesconto = $preco - $desconto;
            return 'O desconto é de R$' . number_format($precoComDesconto, 2);
        }

        echo calculaPromocao(28.76);
    ?>
</body>
</html>