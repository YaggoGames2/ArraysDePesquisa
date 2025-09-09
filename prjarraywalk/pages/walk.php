<?php

$frutas = ["banana", "maçã", "laranja"];

// pega a fruta escolhida do formulário
$frutaEscolhida = isset($_GET['frutas']) ? $_GET['frutas'] : null;

// função que será chamada em cada elemento
function mostrar($valor, $chave)

//$VALOR = FRUTA SELECIONADA 

//$chave → o índice do item no array(elevai guardar todas as frutas ao mesmo tempo)
//os indices vao ser de acordo com forma feita no html

//ex;fiz,maca(1),banana(2),laranja(3) 

//function mostrar($valor, $chave) =define uma função chamada mostrar que recebe dois parâmetros:

//PARAMETRO = são dados que você dá para a função trabalhar.



    //{echo "$chave => $valor<br>";

{
    echo "$chave => $valor<br>";
}

// percorre todas as frutas
array_walk($frutas, "mostrar");




// mostra só a escolhida
echo "<br>A escolhida foi:  $frutaEscolhida";


?> 