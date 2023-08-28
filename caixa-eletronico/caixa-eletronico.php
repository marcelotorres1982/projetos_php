<?php
	$saldo = 5000;
	$resto = $saldo - $saque;
	$saque = 1285;
	$resto = $saque;
	$tot100 = floor($resto / 100);
	$resto = $resto % 100;
	
	$tot50 = floor($resto / 50);
	$resto = $resto % 50;
	
	$tot20 = floor($resto / 20);
	$resto = $resto % 20;
	
	$tot10 = floor($resto / 10);
	$resto = $resto % 10;
	
	$tot5 = floor($resto / 5);
	$resto = $resto % 5;
	
	echo "Seu saque de R\$$saque vai resultar em: $tot100 nota(s) de 100 Reais, $tot50 nota(s) de 50 Reais, $tot20 nota(s) de 20 Reais, $tot10 nota(s) de 10 Reais, $tot5 nota(s) de 5 Reais. Seu saldo final em reais ficou em: $saldo_final Reais";
	?>