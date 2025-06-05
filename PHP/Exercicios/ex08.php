<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <?php 
        /*
            Crie um algoritmo que leia um número real e mostre na tela o seu dobro e a sua terça parte.
            Ex:
            Digite um número: 3.5
            O dobro de 3.5 é 7.0
            A terça parte de 3.5 é 1.16666
        */

        $valor_real = 3.79;
        $dobro = $valor_real * 2;
        $terceira_parte = $valor_real / 3;

        echo "O dobro de $valor_real é $dobro <br>";
        echo "A terceira parte de $valor_real é $terceira_parte";
    ?>
</body>
</html>