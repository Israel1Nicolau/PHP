<?php
/********** Escalares **********/
//string
$nome = "50";
var_dump($nome);
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é string";
endif;
echo "<hr>";
//inteiro
$n = 1;
var_dump($n);
if(is_integer($n)):
	echo "É um inteiro";
else:
	echo "Não é inteiro";
endif;
echo "<hr>";
//float
$f = 12.4;
var_dump($f);
if(is_float($f)):
	echo "É float";
else:
	echo "Não é float";
endif;
echo "<hr>";
//boolean
$nome1 = false;
var_dump($nome1);
if(is_bool($nome1)):
	echo "É booleano";
else:
	echo "Não é booleano";
endif;
echo "<hr>";
/*********** Compostos ************/
$carros = array("1", "20", "300", "45555", 12, 20.6, True);
var_dump($carros);
if(is_array($carros)):
	echo "É um array";
else:
	echo "Não é array";
endif;
echo "<hr>";
//object
class Cliente{
	public $nome;
	public function atribuiNome($nome){
		$this->$nome = $nome;
	}
}

$Cliente = new Cliente();
$Cliente->atribuiNome("Um nome");
var_dump($Cliente);
if(is_object($Cliente)):
	echo "É um objeto";
else:
	echo "Não é objeto";
endif;
echo "<hr>";

/************* Especiais *************/
//null
$cidade = null;
var_dump($cidade);
/* resource
serve para links externos, conexão de banco de dados e etc. */

?>