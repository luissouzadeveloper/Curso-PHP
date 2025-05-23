<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>
<body>
    <?php 
        // Praticando if e else
        $usuario_cartao = true;
        $valor_compra = 200;
        $valor_frete = 50;
        $recebeu_desconto = false;

        if ($usuario_cartao === true && $valor_compra >= 100) {
            $valor_frete = 0;
            $recebeu_desconto = true;
        }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>
        Possui cartão da loja?
        <?php 
            if ($usuario_cartao === true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
        ?>
    </p>

    <p>Valor da compra: <?php echo $valor_compra ?></p>

    <p>
        Recebeu desconto no frete?
        <?php 
            if ($recebeu_desconto === true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
        ?>
    </p>

    <p>Valor do frete: <?php echo $valor_frete ?></p>
</body>
</html>