<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
        // Arrays
        $numeros = array(1, 2, 3, 4, 5);
        $numeros[] = 6;

        // O php usa var_dump ou print_r para mostrar arrays
        echo "<pre>";
            var_dump($numeros);
        echo "</pre>";
        echo "<br>";
        echo "<pre>";
            print_r($numeros);
        echo "</pre>";

        $lista_frutas = ['Banana', 'Morango', 'Uva', 'Laranja'];
        var_dump($lista_frutas);
        echo "<br>";

        // Imprimindo arrays por índices
        echo $lista_frutas[3] . '<br>';

        // Associativos
        $mochila = array(
            1 => 'Caderno',
            2 => 'Caneta',
            3 => 'Notebook',
            4 => 'Borracha'
        );
        $mochila['y'] = 'Lápis';
        echo '<pre>';
            var_dump($mochila);
        echo '</pre>';
        echo $mochila[3];   
    ?>
</body>
</html>