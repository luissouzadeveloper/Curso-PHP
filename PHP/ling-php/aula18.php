<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18</title>
</head>
<body>
    <?php 
        // Funções nativas para manipular strings

        $texto = 'Curso de Php';

        // strtolower = transforma a string toda em minúscula.
        echo strtolower($texto) . '<br>';

        // strtoupper = transforma a string toda em maiúscula.
        echo strtoupper($texto) . '<br>';

        // ucfirst = transforma a primeira letra da string maiúscula.
        echo ucfirst($texto) . '<br>';

        // strlen = conta quantos caracteres tem na string
        echo strlen($texto) . '<br>';

        // str_replace = troca uma deteriminada string
        echo str_replace('Php', 'Python', $texto) . '<br>';

        // substr = recorta a string
        echo substr($texto, 9, 3);
    ?>
</body>
</html>