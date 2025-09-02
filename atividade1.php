<?php
/**
 * Atividade 1 - Cauã Chaerki Bobato
 */
$cor_sinal = 'verde';

if ($cor_sinal == 'verde') {
    echo "pode passar";
} elseif ($cor_sinal == 'vermelho') {
    echo "pare";
} elseif ($cor_sinal == 'amarelo') {
    echo "atenção";
} else {
    echo "cor inválida";
}
?>