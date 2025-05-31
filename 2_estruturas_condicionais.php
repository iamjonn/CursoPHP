<?php

echo "<h1>Estruturas condicionais<h1><br><br>";

// estruturas que usam operadores e comparaçoes
// para atingir resultados diferentes no prog.

// if, else, else if 


$idade = 20;


if($idade>=18) {

echo"voce é maior de idade<br>";

}else{

echo"voce é de menor<br>";

}

$nota = 3;

if ($nota>= 7) {

  echo"parabens voce passou";
}else if ($nota<7 & $nota>=4 ){

  echo "voce esta de recuperaçao";
}else{
  echo "voce reprovou";
}

?>