<?php
//Arrays associativos
$pessoa = array("nome"=>"Israel", 
	"idade"=> 20, 
	"altura"=>1.70);
$pessoa["cidade"] = "São Paulo";

foreach ($pessoa as $indice => $value) {
	# code...
	echo $indice.": ".$value."<br>";
}
echo "<hr>";

//Arrays multidimensionais
$times = array
	("cariocas"=>array("campeao"=>"Flamengo", "vice"=>"Vasco", "ultimo"=>"Fluminense"),
	"paulistas"=>array("campeao"=>"São Paulo", "vice"=>"Palmares", "ultimo"=>"Corinthians"));

echo $times["cariocas"]["campeao"];
echo "<br>";

foreach ($times["cariocas"] as $indice => $value) {
	# code...
	echo $indice.": ".$value."<br>";
}
foreach ($times["paulistas"] as $indice => $value) {
	# code...
	echo $indice.": ".$value."<br>";
}

?>