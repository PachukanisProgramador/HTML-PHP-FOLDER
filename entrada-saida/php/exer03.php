<?php

function exercicio03(){
    $binario = $_GET['tBinario'];
    $decimal = 0;
    $quantidade = strlen($binario);

    for($i = 0; $i < ($quantidade - 1); $i++){
        $aux = $binario[$i] * pow(2, $i);
        $decimal += $aux;
    }
    return $decimal + $aux;
}
echo exercicio03();
?>