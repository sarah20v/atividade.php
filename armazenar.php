<?php

function gerarVetor($tamanho) {
    $vetor = array();
    for ($i = 0; $i < $tamanho; $i++) {
        $vetor[] = rand(1, 100); 
    }
    return $vetor;
}

function verificarParImpar($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "ímpar";
    }
}

$vetor = gerarVetor(15);

foreach ($vetor as $numero) {
    echo "O número " . $numero . " é " . verificarParImpar($numero) . ".<br>";
}

?>
