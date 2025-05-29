<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>
<body>
    <?php 
        // Casting de tipos

        // gettype() -> Retorna o tipo da variável
        $valor = 10;
        // Conversão de tipo
        $valor2 = (double) $valor;
        $valor3 = (string) $valor;

        echo gettype($valor);
        echo '<br>';
        echo gettype($valor2);
        echo '<br>';
        echo gettype($valor3);

        echo '<br>';

        $texto = '10';
        $texto2 = (int) $texto;
        echo $texto2;

        echo '<br>';


    ?>
</body>
</html>