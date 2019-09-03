<?php
//array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
$nomes = array("Primeiro"=>"NomeUm", "Segundo"=>"NomeDois", "Terceiro"=>"NomeTrês");
$values = array_values($nomes);
print_r($values);
echo "<br>";
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";
//array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
$carros = array("camaro", "uno", "gol");
$motos = array("pop100", "50cc", "cb1000");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";
//array_pop($array) = exlui a ultima posição do array.
array_pop($carros);
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<hr>";
//array_shift($array) = exclui a primeira posição do array.
print_r($motos);
echo "<br>";
echo array_shift($motos);
echo "<br>";
print_r($motos);

?>
