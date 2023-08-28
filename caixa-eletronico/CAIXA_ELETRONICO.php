<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta http-equiv= "X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
	<title>BITE BANK</title>
	<link rel="stylesheet" href="style.css">
	<style>
		img.nota {
			height: 50px;
			margin: 5px;
		}
<head/>
<body>
	<?php
	$saque = $_REQUEST['saque'] ?? 0;
	
	?>
	<main>
		<h1>CAIXA ELETRÔNICO</H1>
		<form action="<?=$_server['PHP_SELF']?>" method="get">
			<label for="saque">Qual valor você deseja sacar? (R$)
			<sup>*</sup> </label>
			<input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
			<p style=""font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100 R$50 R$20 R$10 R$5</p>
			<input type="submit" value="Sacar">
		</form>
	</main>
	<?php
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
	?>
	<section>
		<h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
		<p>O caixa eletrônico vai te entregar as seguintes notas:</p>
		<ul>
			<li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$tot100?></li>
			<li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$tot50?></li>
			<li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x <?=$tot20?></li>
			<li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$tot10?></li>
			<li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$tot5?></li>
		</ul>
		</section>
		</body>
		</html>
		
		