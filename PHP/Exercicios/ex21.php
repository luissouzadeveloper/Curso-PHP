<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 21</title>
</head>
<body>
    <?php 
        /*
            Desenvolva um algoritmo que leia dois valores pelo teclado e passe esses valores para um procedimento Somador() que vai calcular e mostrar a soma entre eles.
        */

        function somador($valor1, $valor2) {
            $soma = $valor1 + $valor2;
            return "A soma entre $valor1 e $valor2 é de $soma";
        }

        echo somador(3, 7);
    ?>
</body>
</html>