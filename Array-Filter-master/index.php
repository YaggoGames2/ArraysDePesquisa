<?php
$frutas=["banana","maçã","uva","abacaxi","laranja"];

$resultado=array_filter($frutas,function($fruta){
    return stripos($fruta,"l")=== 0;
});

print_r($resultado);
?>