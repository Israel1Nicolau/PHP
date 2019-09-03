<?php
$nomes = array("Um"=>"israel", "Dois"=>"joão", "Três"=>"alves");

//is_array($array) = verifica se uma determinada variável é um array.
echo is_array($nomes);
if(is_array(($nomes))):
	echo "<br>É array";
else:
	echo "<br>Não é array";
endif;
echo "<hr>";
//in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
echo in_array("Israel", $nomes);
echo "<hr>";
//array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
$keys = array_keys($nomes);
print_r($keys);

?>