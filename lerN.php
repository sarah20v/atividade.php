<?php

$contagem = 0;

foreach ($_GET as $parametro => $valor) {
    if ($valor == 0) {
        break; 
    }

    if ($valor >= 100 && $valor <= 200) {
        $contagem++;
    }
}

echo "Foram digitados " . $contagem . " números entre 100 e 200.";

?>
