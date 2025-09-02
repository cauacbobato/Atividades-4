<?php
/**
 * Atividade 2 - Cauã Chaerki Bobato
 */
$peso = 83;
$altura = 1.82;

$imc = $peso / ($altura * $altura);

echo "IMC: " . round($imc, 2) . "\n";

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Normal";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Acima do peso";
} else {
    echo "Obesidade";
}
?>
