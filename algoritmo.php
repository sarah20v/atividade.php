<?php

function imprimirPadrao($palavra, $repeticoes) {
    echo "Palavra: " . $palavra . "<br>";
    for ($i = 1; $i <= $repeticoes; $i++) {
        echo "- " . strtoupper($palavra) . str_repeat(" " . strtoupper($palavra), $i-1) . "<br>";
    }
}

$palavra = "sonho";
$repeticoes = 4;

imprimirPadrao($palavra, $repeticoes);

?>
