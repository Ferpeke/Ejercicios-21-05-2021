<?php

use function PHPSTORM_META\type;

$arreglo = array();

  for ($i=0; $i < 20 ; $i++) { 

    $arreglo[$i] = rand(1, 1000);

  }

  $numeros_aleatorios = json_encode($arreglo);
  echo($numeros_aleatorios);
  

  
?>