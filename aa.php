<?php

namespace SRC;

class Funcoes
{
    /*
    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
	Exemplos para teste:
	Ano 1905 = século 20
	Ano 1700 = século 17
     * */
    public function SeculoAno(int $ano): int {
        $ano = readline('Digite um ano: ');
        return $ano. " pertence ao século ". ceil($ano / 100);
    }	
	
	
	
	/*
    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido
    Exemplo para teste:
    Numero = 10 resposta = 7
    Número = 29 resposta = 23
     * */
    public function PrimoAnterior(int $numero): int {
        $numero = readline('Digite um número: '); //10
        $primos = array();
        for ($i = $numero - 1; $i > 1; $i--) {
            $flag = 0;

            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $flag = 1;
                    break;
                }
            }
            if ($i > 1 && $flag == 0) {
                array_push($primos, $i);
            }
        }
        return 'O número primo mais próximo ao digitado é: '.$primos[0];
    }

    /*
    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.
    Exemplo para teste:
	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);
	resposta = 25
     * */
    public function SegundoMaior(array $arr): int {
        $arr = array(
            array(25,22,18),
            array(10,15,13),
            array(24,5,2),
            array(80,17,15)
            );
            
        $maior = 0;
        $segMaior = 0;
        
        for($i = 0; $i < count($arr); $i++)
        {
            for($j = 0; $j <count($arr[$i]); $j++)
            {
                if ($arr[$i][$j] > $maior)
                 {
                     $segMaior = $maior;
                    $maior = $arr[$i][$j];
                }
            }   	
        }
        return $segMaior;
    }
    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.
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
    
	public function SequenciaCrescente(array $arr): boolean {
        $arr = array(1, 3, 2, 1); //primeiro exemplo
        $cont = 0; //contador de splices que o código realizou;
        $res = true; //resposta booleana para seq. crescente ou não;
        for ($i = 0; $i <= sizeof($arr); $i++){
    
            if ( $arr[$i] >= $arr[$i+1]){ //verificando se o elemento é menor que o próximo do index;
                array_splice($arr, $i, 1); //removendo o elemento sem quebrar a sequencia do index de elementos;
                $cont++; //somando ao número de splices realizado;
            }
        }
        if ($cont > 1){ // retorna false caso mais e uma alteração tenha que ser feita para deixar a sequência crescente;
            $res = false;
        }
        return $res;

        // print_r($arr);
    }
}