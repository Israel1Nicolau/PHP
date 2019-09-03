<?php
// Constantes
define("NOME", "Israel");
define("IDADE", 20);
define("ALTURA", 1.70);
define("CASADO", False);

define("TIMES", ['São Paulo', 'Corinthians', 'Palmares']);

echo 'Meu nome é '.NOME. ' e minha idade é '.IDADE. ' e minha altura é '.ALTURA. ' e meu estado civil é '.CASADO;
echo "<hr>";
echo TIMES[0], ' ', TIMES[2], ' ', TIMES[1];
var_dump(TIMES);

echo "<hr>";
// Constantes são automaticamente globais
function exibeNomes(){
	echo NOME;
}

exibeNomes();
?>
