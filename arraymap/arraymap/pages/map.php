<?php

$frutas = ["banana", "maçã", "laranja"];
$frutaEscolhida = $_GET['frutas'] ?? null;

$frutasDestacadas = array_map(function($valor) use ($frutaEscolhida) {
    //$valor = strtoupper($valor);
    return $valor ===//strtoupper
     ($frutaEscolhida) ? "$valor (escolhida)" : $valor;
}, $frutas);

print_r($frutasDestacadas);//{retorna um novo array, e você quer ver todos os valores de uma vez.

 //mostra um array ou objeto de um jeito que dá pra entender toda a estrutura, incluindo índices e valores.
//}
 
//array_map é como se fosse uma “atualização” ou “transformação” dos dados de um array.
//Ele pega cada item, aplica uma regra/função, e devolve um novo array atualizado.

//geracao de dados 



//array_map() → percorre o array $frutas e aplica a função em cada elemento, retornando um novo array.

//function($valor) use ($frutaEscolhida) → função anônima que recebe cada valor do array como $valor.

//use ($frutaEscolhida) → permite que a função acesse a variável $frutaEscolhida que está fora dela.

//$valor === $frutaEscolhida ? "$valor (escolhida)" : $valor; → operador ternário:

//Se $valor for igual à fruta escolhida, retorna "$valor (escolhida)".

//Se não, retorna o valor normal $valor.

//$frutasDestacadas → guarda o novo array com a fruta escolhida marcada.

//print_r($frutasDestacadas); → imprime o array completo de forma legível.

//o array map cria um nnovo conjunto de array e no final vai mostrar a as frutas+ a fruta escolhida 
// sem precisar de um  if

//o array walk  vai mostrar um array,porem é preciso ter uma condição(if)
















?>