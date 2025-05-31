<?php


echo"laços/Estruturas de repetição <br>";

//while, do while, for


// for => parece ser mais complexo, mas pe o preferido

for($i = 0; $i <=10; $i++){

echo "n-$i<br>";

}

for($i = 10; $i < 10; $i--){

  echo "n-$i<br>";
  
}

// $contador = 0;

// while($contador > 0){

// echo"";

// }

$frutas = ['maça', 'uva', 'banana', 'laranja'];

foreach($frutas as $fruta) {
  echo "Fruta é $fruta <br>";
}

$pessoas = [
  'maria' => 3000,
  'matheus' => 5000,
  'joao' => 10000
];

  echo '->' . $pessoas['matheus'] . "<br>";

  foreach($pessoas as $pessoa => $salario) {
    echo "dados: $pessoa ganha $salario por mes <br>";
  }

?>