<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 23</title>
</head>
<body>
    <?php 
        $nome_funcionario = 'João';
        $salario = 1.518;
        $anos_empresa = 5;

        if ($anos_empresa <= 3) {
            $reajuste = ($salario * 3) / 100;
            $novo_salario = $salario + $reajuste;
            echo "Você tem $anos_empresa de empresa. O novo salário é de R$$novo_salario";
        } else if ($anos_empresa <= 10) {
            $reajuste = ($salario * 12.5) / 100;
            $novo_salario = $salario + $reajuste; 
            echo "Você tem $anos_empresa de empresa. O novo salário é de R$$novo_salario";
        } else if ($anos_empresa > 10) {
            $reajuste = ($salario * 20) / 100;
            $novo_salario = $salario + $reajuste; 
            echo "Você tem $anos_empresa de empresa. O novo salário é de R$$novo_salario";
        }
    ?>
</body>
</html>