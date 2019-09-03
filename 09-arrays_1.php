<?php
$comida = ["arroz", "feijão", "macarrão", "couve"];

//Count
echo count($comida);
echo "<hr>";
$total = count($comida);
echo $total;
echo "<hr>";
///////////////////////////////////////////
//loop foreach
foreach($comida as $valor) {
	echo $valor."<br>";
}

?>
