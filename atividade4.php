<?php
/**
 * Atividade 4 - Cauã Chaerki Bobato
 */
$valor = 149;
$cupom = false;

$desconto = 0;

if ($valor > 150 || $cupom) {
    $desconto = 0.10;
}

$valor_desconto = $valor * $desconto;
$valor_final = $valor - $valor_desconto;

echo "Valor original - R$" . number_format($valor, 2, ',', '.') . "\n";
echo "Desconto aplicado - " . ($desconto * 100) . "%\n";
echo "Valor final - R$" . number_format($valor_final, 2, ',', '.');
?>