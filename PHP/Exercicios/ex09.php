<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <?php 
        /*
            Desenvolva um programa que leia uma distância em metros e mostre os valores relativos em outras medidas.
            Ex:
            Digite uma distância em metros: 185.72
            A distância de 85.7m corresponde a:

            0.18572Km
            1857.2dm
            1.8572Hm
            18572.0cm
            18.572Dam
            185720.0mm
        */

        $metros = 185.72;

        $km = $metros / 1000;
        $dm = $metros * 10;
        $hm = $metros / 100;
        $cm = $metros * 100;
        $dam = $metros / 10;
        $mm = $metros * 1000;

        echo "A distância de $metros é e para KM corresponde a $km KM <br>";
        echo "A distância de $metros é e para dm corresponde a $dm dm <br>";
        echo "A distância de $metros é e para hm corresponde a $hm hm <br>";
        echo "A distância de $metros é e para cm corresponde a $dm cm <br>";
        echo "A distância de $metros é e para dam corresponde a $dam dam <br>";
        echo "A distância de $metros é e para mm corresponde a $mm mm <br>";
    ?>
</body>
</html>