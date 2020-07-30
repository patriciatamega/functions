<?php

$a = 10; /* variável */

function trocaValor($b) { /* parâmetro de função */
function trocaValor(&$b) { /* & = passagem de parâmetro por referência */

  $b += 50;
  
  return $b;

}

echo trocaValor($a);
echo <br>;
echo $a;

?>
