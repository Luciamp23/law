<?php

function recupera(string $nombre_parametro): ?int {
    $valor = $_POST[$nombre_parametro] ?? null; 
    if ($valor !== null && is_numeric($valor) && (int)$valor >= 1) {
        return (int)$valor;
    }
    return null;
}
?>