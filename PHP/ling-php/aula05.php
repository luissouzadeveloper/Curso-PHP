<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    <?php 
        $nome = 'Zé';
        $idade = 19;
        $peso = 68.6;

        // O operador de concatenação é o .
        echo 'Oi, meu nome é ' . $nome . ' tenho ' . $anos . ' anos e peso ' . $peso . 'kg. <br>';

        // Posso usar aspas duplas
        echo "Oi,meu nome é $nome, tenho $idade anos e peso $peso Kg."
    ?>
</body>
</html>