<?php

function ola() {

  $argumentos = func_get_args();
  
  return $argumentos;

}

var_dump(ola("Bom dia", 10)); // Podemos fazer ações diferentes dentro deste mesmo recurso.

?>
