<?php


/*

    while - enquanto algo for verdadeiro faça
    while (condição é verdadeira)
    {
        faça o que está aqui    
    }

    for - para uma condição até um resultado faça
*/

$j = 1;

while($j <= 3){
    echo "{$j} - Vou arrebbentar no PHP<br>";
    $j = $j + 1;
}

echo "<hr>";
echo "<hr2>Minha Tabuada</h2>";
$i = 1;
$num = 5;
echo "<br>";
while($i<=10){

    echo "{$i} x {$num} = ".$i*$num;
    echo "<br>";
    $i++; // $i = $i +1
}