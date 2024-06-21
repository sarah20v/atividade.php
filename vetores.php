<?php

$v1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$v2 = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14);

$naocomuns = array_merge(array_diff($v1, $v2), array_diff($v2, $v1));

echo "Números não comuns aos dois vetores: ";
foreach ($naocomuns as $numero) {
    echo $numero . ", ";
}
?>