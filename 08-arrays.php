<?php
//Arrays
$carros = array(1=>"BMW", 2=>"GOL", 3=>"HYLUX");
$carros[] = "AMAROK";
print_r($carros);

echo "<hr>";
$carros[10] = "CAMARO";
echo $carros[10];
echo "<hr>";
//////////////////////////////////////////////
$motos = array();
$motos[] = "YAMAHA";
$motos[] = "HONDA";
$motos[5] = "SUZUKI";
print_r($motos);
echo "<br>";
echo $motos[5];
echo "<hr>";
//////////////////////////////////////////////
$clientes = ["Israel", "João", "Doug"];
print_r($clientes);
echo "<hr>";
//////////////////////////////////////////////
$carro = [1=>"1", 2=>"2", 3=>"3"];
print_r($carro);
echo "<br>";

foreach ($motos as $valor) {
	# code...
	echo $valor."<br>";
}

?>
