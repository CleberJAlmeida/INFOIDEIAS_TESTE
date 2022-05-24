<?php

namespace src;

include_once('funcoes.php');

$funcao = new Funcoes();


//-------------------------------------Tarefa 01

echo "<p> ********** Tarefa 01 **************************</p>";
$ano = 1905;
echo ("Ano = {$ano} -> Século {$funcao->SeculoAno($ano)}");


//--------------------------------------Tarefa 02
echo "<p> ********** Tarefa 02 **************************</p>";
for ($i = 3; $i < 20; $i++) {
    $numero = $i;
    echo ("Número = {$numero} -> Primo Anterior {$funcao->PrimoAnterior($numero)}");
    echo ("</br>");
}



//-----------------------------------Tarefa 03
echo "<p> ********** Tarefa 03 **************************</p>";
$array = array(
    array(25, 25, 108),
    array(10, 15, 13),
    array(24, 501, 2),
    array(80, 1007, 15)
);
print_r($array);
echo ("..........<br>");
echo ("Segundo maior Número: {$funcao->SegundoMaior($array)}");

//------------------------------------------Tarefa 04
echo "<p> ********** Tarefa 04 **************************</p>";
//[1, 3, 2, 1]  false
$array1 = [1, 3, 2, 1];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[1, 3, 2]  true
$array1 = [1, 3, 2];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[1, 2, 1, 2]  false
$array1 = [1, 2, 1, 2];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[3, 6, 5, 8, 10, 20, 15] false
$array1 = [3, 6, 5, 8, 10, 20, 15];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[1, 1, 2, 3, 4, 4] false
$array1 = [1, 1, 2, 3, 4, 4];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[1, 4, 10, 4, 2] false
$array1 = [1, 4, 10, 4, 2];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[10, 1, 2, 3, 4, 5] true
$array1 = [10, 1, 2, 3, 4, 5];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[1, 1, 1, 2, 3] false
$array1 = [1, 1, 1, 2, 3];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[0, -2, 5, 6] true
$array1 = [0, -2, 5, 6];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[1, 2, 3, 4, 5, 3, 5, 6] false
$array1 = [1, 2, 3, 4, 5, 3, 5, 6];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[40, 50, 60, 10, 20, 30] false
$array1 = [40, 50, 60, 10, 20, 30];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
//[1, 1] true
$array1 = [1, 1];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
// [1, 2, 5, 3, 5] true
$array1 = [1, 2, 5, 3, 5];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
// [1, 2, 5, 5, 5] false
$array1 = [1, 2, 5, 5, 5];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
// [10, 1, 2, 3, 4, 5, 6, 1] false
$array1 = [10, 1, 2, 3, 4, 5, 6, 1];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
// [1, 2, 3, 4, 3, 6] true
$array1 = [1, 2, 3, 4, 3, 6];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
// [1, 2, 3, 4, 99, 5, 6] true
$array1 = [1, 2, 3, 4, 99, 5, 6];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
// [123, -17, -5, 1, 2, 3, 12, 43, 45] true
$array1 = [123, -17, -5, 1, 2, 3, 12, 43, 45];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
echo "<p> - </p>";
// [3, 5, 67, 98, 3] true
$array1 = [3, 5, 67, 98, 3];
print_r($array1);
echo ($funcao->SequenciaCrescente($array1)) ? "Verdade" : "Falso";
/*



    [3, 5, 67, 98, 3] true
    */