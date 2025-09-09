<?php 

//$fruta1 =  "maçã";
//$fruta2 = "banana";

//var_dump(isset($fruta1));
//var_dump(isset($fruta1, $fruta2));

//unset($fruta3);

//var_dump(isset($fruta1));
//var_dump(isset($fruta2, $fruta1));

//$uva = NULL;

//var_dump(isset($uva));

$frutas = array ('fruta1' => 2, 'fruta2' => NULL, 'fruta3' => array('frutas' => 'banana'));

var_dump(isset($frutas['fruta1']));
var_dump(isset($frutas['fruta2']));
var_dump(isset($frutas['fruta4']));



?>