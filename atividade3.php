<?php
/**
 * Atividade 3 - Cauã Chaerki Bobato
 */
$dia_da_semana = 3;

switch ($dia_da_semana) {
    case 1:
        echo "Domingo\n";
        echo "Fim de semana!";
        break;
    case 2:
        echo "Segunda\n";
        echo "Dia útil: $dia_da_semana";
        break;
    case 3:
        echo "Terça\n";
        echo "Dia útil: $dia_da_semana";
        break;
    case 4:
        echo "Quarta\n";
        echo "Dia útil: $dia_da_semana";
        break;
    case 5:
        echo "Quinta\n";
        echo "Dia útil: $dia_da_semana";
        break;
    case 6:
        echo "Sexta\n";
        echo "Dia útil: $dia_da_semana";
        break;
    case 7:
        echo "Sábado\n";
        echo "Fim de semana!";
        break;
    default:
        echo "Número do dia desconhecido";
}
?>