<?php
function exercicio02(){
    $num1 = 0;
    $num2 = 1;
    $repeticoes = $_GET['tSequencia'];
    $i = 0;
    echo "<p> Segue: </p><br><br>";
    echo "\t $num1 $num2";
    while($i <= $repeticoes){
        $aux = $num1 + $num2;
        $num1 = $num2;
        $num2 = $aux;
        echo "\t$num2";
        $i++;
    }
}
echo exercicio02();
?>