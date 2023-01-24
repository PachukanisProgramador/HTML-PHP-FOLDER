<?php

function exercicio01(){
    $distancia = $_GET['tDistancia'];
    $consumo = $_GET['tConsumo'];

    return $distancia / $consumo;
}

echo exercicio01();

?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>