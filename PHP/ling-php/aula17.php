<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17</title>
</head>
<body>
    <?php 
        // Funções

        function exibirSaudacao(){
            echo "Olá, tudo bem? <br>";
        }
        
        exibirSaudacao();
        exibirSaudacao();

        function calcularIMC($peso, $altura) {
            $imc = $peso / ($altura * $altura);
            return 'Seu imc é de ' . number_format($imc, 1) . '<br>';
        }

        echo calcularIMC(60, 1.70);
        echo calcularIMC(50, 1.63);
        echo calcularIMC(87, 1.77);
    ?>
</body>
</html>