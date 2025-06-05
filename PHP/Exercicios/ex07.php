<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <?php 
        /*
            Faça um programa que leia um número inteiro e mostre o seu antecessor e seu sucessor.
            Ex:
            Digite um número: 9
            O antecessor de 9 é 8
            O sucessor de 9 é 10
        */

        $numero = 10;
        echo 'O numero antecessor de ' . $numero . ' é ' . $numero - 1 . '<br>';
        echo 'O numero sucessor de ' . $numero . ' é ' . $numero + 1 . '<br>';
    ?>
</body>
</html>