<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos de pesquisa em arrays</title>
</head>
<body>
    <?php 
        // in_array('item', $array) -> retorna um valor bool (true ou false)
        $lista_compras = ['Arroz', 'Feijão', 'Café', 'Açúcar'];

        echo '<pre>';
        print_r($lista_compras);
        echo '</pre>';

        $item = in_array('Oleo', $lista_compras);

        if ($item === true) {
            echo "O item está na lista <br>";
        } else {
            echo "O item não está na lista <br>";
        }

        // array_search() -> retorna o índice caso o item exista, se não achar, ele retorna null
        $item2 = array_search('Oleo', $lista_compras);

        if ($item2 != null) {
            echo "O item está na lista <br>";
        } else {
            echo "O item não está na lista <br>";
        }
        echo '<hr>';

        $lista_coisas = [
            'frutas' => ['Laranja', 'Uva', 'Morango'],
            'marcas' => ['Ford', 'Fiat', 'Chevrolet']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        $item3 = in_array('Ford', $lista_coisas['marcas']);
        echo $item3;

    ?>
</body>
</html>