<?php

function encontrarMaiorMenor($vetor) {
    $maior = $vetor[0];
    $menor = $vetor[0];
    foreach ($vetor as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
        if ($numero < $menor) {
            $menor = $numero;
        }
    }
    return array("maior" => $maior, "menor" => $menor);
}

function calcularMedia($vetor) {
    $soma = array_sum($vetor);
    $media = $soma / count($vetor);
    return $media;
}

function calcularPercentualPares($vetor) {
    $pares = 0;
    foreach ($vetor as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        }
    }
    $percentual = ($pares / count($vetor)) * 100;
    return $percentual;
}

$v1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$v2 = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14);

$naocomuns = array_merge(array_diff($v1, $v2), array_diff($v2, $v1));

echo "Números não comuns aos dois vetores: ";
foreach ($naocomuns as $numero) {
    echo $numero . ", ";
}
echo "<br>";

$maiorMenor = encontrarMaiorMenor($naocomuns);
echo "Maior número: " . $maiorMenor['maior'] . "<br>";
echo "Menor número: " . $maiorMenor['menor'] . "<br>";

$percentualPares = calcularPercentualPares($naocomuns);
echo "Percentual de números pares: " . number_format($percentualPares, 2) . "%\n";

$media = calcularMedia($naocomuns);
echo "Média dos números: " . number_format($media, 2) . "<br>";

?>
