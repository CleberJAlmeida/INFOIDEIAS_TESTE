<?php

namespace SRC;

use function PHPSTORM_META\map;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. 
    O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int
    {
        /*
        teste de matemática
        echo $ano % 100;
        echo "</br>";
        echo $ano / 100;
        echo "</br>";
        */
        if ($ano < 100) {
            $seculo = 1;
        } else if ($ano % 100 == 0) {
            $seculo = $ano / 100;
        } else {
            $seculo = ($ano / 100) + 1;
        }

        return ($seculo);
    }









    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int
    {
        if ($numero < 3) {
            echo ("o número deve ser maior que 3 por razões de matemática");
        } else {
            for ($i = $numero - 1; $i > 1; $i--) { //percore decrescente pra procurar o anterior
                $primo = true;
                for ($u = 2; $u < 10; $u++) { //percorre crescente pra fazer a divisão
                    if ($i % $u == 0 && $i != $u) { //verifica se é primo
                        $primo = false;
                        break;
                    }
                }
                if ($primo) {
                    $primoAnterior = $i;
                    $i = 0; //para o loop sem usar o exit 
                }
            }
        }
        return ($primoAnterior);
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números
     inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */


    public function SegundoMaior(array $arr): int
    {
        $numMaior = 0;
        $segundoMaior = 0;
        foreach ($arr as $linha => $dados) {
            foreach ($dados as $coluna => $dado) {
                if ($dado > $numMaior) {
                    $numMaior = $dado;
                }
            }
        }
        foreach ($arr as $linha => $dados) {
            foreach ($dados as $coluna => $dado) {
                if ($dado < $numMaior && $dado > $segundoMaior) {
                    $segundoMaior = $dado;
                }
            }
        }
        return ($segundoMaior);
    }








    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e 
   responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    public function SequenciaCrescente(array $arr): bool
    {
        $arraySequencial = true;
        foreach ($arr as $linha => $dado) {
            $arraySequencial = true;
            $dadosAnterior = null;
            // echo $dado;
            //echo ("<br>");
            $novoArray = $arr;
            unset($novoArray[$linha]);
            //print_r($novoArray);
            //echo ("<br>");
            foreach ($novoArray as $l => $d) {
                //var_dump($dadosAnterior, $d);
                //echo ("<br>---------------------<br>");
                //usa o var dadoAnterior por causa do unset que retira um elemento do array
                if ($dadosAnterior != null && $d <= $dadosAnterior) { //se o array atual for menor ou iqual que o anterior não e sequencial
                    $arraySequencial = false;
                    break;
                } else {
                    $dadosAnterior = $d;
                }
            }
            if ($arraySequencial) { //diminuir interação
                break;
            }
        }

        return ($arraySequencial);
    }
}
