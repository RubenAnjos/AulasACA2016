<?php
	function xpto (){
		echo "Hello World";
	}
	define ("PI", 3.1415);
	define ("CREATE_BD","create schema minha_bd");


	$i = 10; //
	echo $i.PHP_EOL;
	$i = 10.2; //float
	echo $i.PHP_EOL;
	$i = "Artur"; //string avaliativa
	echo $i.PHP_EOL;
	$i = 'Artur'; //string literal
	echo $i.PHP_EOL;
	$i = true; //boolean
	echo $i.PHP_EOL;
	//$i = xpto; //function
	//echo $i.PHP_EOL;
	$i = new Date("Y-m-d H:i:s"); //
	echo $i.PHP_EOL;
	xpto();
	echo PI;
	echo CREATE_BD
?>	
