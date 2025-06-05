<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16</title>
</head>
<body>
    <h2>Pós incremento</h2>

    <?php 
        // Operador de incremento e decremento

        /*
            O operador de pós incremento so atualiza o valor depois de uma nova instrução
        */
        $v1 = 5;

        echo "O valor é $v1 <br>";
        echo 'O valor em pós incremento é de ' . $v1++ . '<br>';
        echo "O valor atualizado após o pós incremento é de $v1";
    ?>

    <h2>Pré incremento</h2>

    <?php 
        // Operador de incremento e decremento

        /*
            O operador de pré incremento atualiza o valor na própria instrução
        */

        $v1 = 5;

        echo "O valor é $v1 <br>";
        echo 'O valor em pré incremento é de ' . ++$v1 . '<br>';
    ?>

    <h2>Pós decremento</h2>

    <?php 
        // Operador de incremento e decremento

        /*
            O operador de pós decremento so atualiza o valor depois de uma nova instrução
        */
        $v1 = 5;

        echo "O valor é $v1 <br>";
        echo 'O valor em pós incremento é de ' . $v1-- . '<br>';
        echo "O valor atualizado após o pós incremento é de $v1";
    ?>

    <h2>Pré incremento</h2>

    <?php 
        // Operador de incremento e decremento

        /*
            O operador de pré decremento atualiza o valor na própria instrução
        */

        $v1 = 5;

        echo "O valor é $v1 <br>";
        echo 'O valor em pré incremento é de ' . --$v1 . '<br>';
    ?>
</body>
</html>