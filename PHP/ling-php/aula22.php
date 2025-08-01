<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionais</title>
</head>
<body>
    <?php 
        // Arrays multidimensionais
        $lista_coisas = [];

        $lista_coisas['frutas'] = [
            1 => 'Banana',
            2 => 'Maçã',
            3 => 'Morango',
            4 => 'Uva'
        ];
        $lista_coisas['bolsa'] = [
            5 => 'Agenda',
            6 => 'Documentos',
            7 => 'Caneta'
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo '<hr>';
        echo $lista_coisas['frutas'][3] . '<br>';
        echo $lista_coisas['bolsa'][5];
    ?>
</body>
</html>