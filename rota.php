<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>PCV - Problema do Caixeiro Viajante</title>

	<link rel="shortcut icon" href="css/marcador.png" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Dosis:500,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<?php include 'php/class.php'; ?>
</head>
<body onload="LoadingOff();">

	<header class="inHeader roHeader">
		<span>Gerador de rotas utilizando Algoritmo Genético - Problema PCV </span>
	</header>

	<div id="loading" class="loading">
		<span>Calculando a melhor rota, aguarde.
			<div id="load" class="primeira"></div>
		</span>
	</div>

	<section class="roSelect-map">
		<form action="rota.php" method="post">
			<h2 class="roH2">Selecione a cidade de partida</h2>
			<select id="cidade" class="roSelect" name="cidade" autofocus required>
				<option value=""></option>
				<option value="1">Aracaju</option>
				<option value="2">Belém</option>
				<option value="3">Belo Horizonte</option>
				<option value="4">Boa Vista</option>
				<option value="5">Brasília</option>
				<option value="6">Campo Grande</option>
				<option value="7">Cuiaba</option>
				<option value="8">Curitiba</option>
				<option value="9">Florianópolis</option>
				<option value="10">Fortaleza</option>
				<option value="11">Goiânia</option>
				<option value="12">João Pessoa</option>
				<option value="13">Maceió</option>
				<option value="14">Manaus</option>
				<option value="15">Natal</option>
				<option value="16">Palmas</option>
				<option value="17">Porto Alegre</option>
				<option value="18">Porto Velho</option>
				<option value="19">Recife</option>
				<option value="20">Rio Branco</option>
				<option value="21">Rio de Janeiro</option>
				<option value="22">Salvador</option>
				<option value="23">São Luís</option>
				<option value="24">São Paulo</option>
				<option value="25">Teresinha</option>
				<option value="26">Vitória</option>
			</select>

			<h2 class="roH2">Escolha a quantia de rotas para avaliar</h2>
			<select id="pop" class="roSelect" name="pop" required>
				<option value=""></option>
				<option value="400">400</option>
				<option value="800">800</option>
				<option value="1000">1000</option>
			</select>

			<h2 class="roH2">Escolha a quantidade de eras para gerar</h2>
			<select id="era" class="roSelect" name="era" required>
				<option value=""></option>
				<option value="10">10</option>
				<option value="50">50</option>
				<option value="100">100</option>
			</select>

			<div class="btnCenter">
				<button class="roBtnGerar" onclick="LoadingOn();">Gerar rota</button>
			</div>

		</form>

	</section>

	<?php
		$distancia = new Cidade;
		$rota = new Rota;

		$eras = $_POST['era'];
		$popInicial = $_POST['pop'];
		$cidade = $_POST['cidade'];

		// $eras = 100;
		// $popInicial = 999;
		// $cidade = 1;
		
		$populacao = $rota->populacao($popInicial, $cidade);
		$rotaBest = $rota->avaliacao($populacao, $popInicial, $eras, $cidade);

	?>

	<section class="resultado">
		<!-- Aqui exibe o mapa com a melhor rota! -->
		<div class="rota">
			<div class="rota melhor_rota">Melhor rota encontrada:<h1 style="font-size: 2em;">
				<?php
					echo $rotaBest['melhor_km'];
				?>
			</h1></div>
			<div class="rota melhor_rota melhor_rota_cid">Rota a seguir: 
				<?php
					foreach ( $rotaBest['melhor_rota'] as $rt) {
						echo $rt;
					}
					
				?>
			</div>
		</div>
		<div class="mapa"></div>
	</section>

	<script type="text/javascript" src="js/class.js" defer></script>

</body>
</html>


<!-- 
	Aracaju
	Belem
	Belo Horizonte
	Boa Vista
	Brasilia
	Campo Grande
	Cuiaba
	Curitiba
	Florianopolis
	Fortaleza
	Goiania
	Joao Pessoa
	Maceio
	Manaus
	Natal
	Palmas
	Porto Alegre
	Porto Velho
	Recife
	Rio Branco
	Rio de Janeiro
	Salvador
	Sao Luis
	Sao Paulo
	Teresinha
	Vitoria
 -->