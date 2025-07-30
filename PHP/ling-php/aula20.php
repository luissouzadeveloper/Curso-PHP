<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para datas</title>
</head>
<body>
    <?php 
        // Funções nativas para manipular datas
        // Recuperando a data atual
        echo date('D') . '<br>';

        // d/m/a -> d(dia) / m(mês) / Y(ano completo)
        echo date('d-m-Y H:i') . '<br>';

        // Descobrindo o timezone da aplicação
        echo date_default_timezone_get() . '<br>';

        // Calculando timestamp
        $data_inicial = '2025-07-29';
        $data_final = '2025-12-31';

        $time_incial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial . ' - ' . $time_incial . '<br>';
        echo $data_final . ' - ' . $time_final . '<br>';

        $diferenca_times = $time_final - $time_incial;
        echo "A diferença de tempo é de: $diferenca_times <br>";

        // hora atual
        $agora = new DateTime();
        
        echo $agora->format('Y-m-d H:i:s');
    ?>
</body>
</html>