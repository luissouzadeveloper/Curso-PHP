<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>
    <?php 
        // Operadores aritméticos

        // +
        $valor1 = 10;
        $valor2 = 12;

        $soma = $valor1 + $valor2;

        echo "A soma entre $valor1 e $valor2 é $soma <br>";

        // -
        $valor1 = 10;
        $valor2 = 7;
        $subtracao = $valor1 - $valor2;
        echo "A subtração entre $valor1 e $valor2 é $subtracao <br>";

        // *
        $valor1 = 13;
        $valor2 = 5;
        $multiplicacao = $valor1 * $valor2;
        echo "A multiplicação entre $valor1 e $valor2 é $multiplicacao <br>";

        // /
        $valor1 = 2;
        $valor2 = 2;
        $divisao = $valor1 / $valor2;
        echo "A divisão entre $valor1 e $valor2 é $divisao <br>";

        // %
        $valor1 = 9;
        $valor2 = 2;
        $modulo = $valor1 % $valor2;
        echo "O módulo entre $valor1 e $valor2 é $modulo <br>";
    ?>
</body>
</html>