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
<body>

	<header class="inHeader roHeader">
		<span>Gerador de rotas utilizando Algoritmo Genético - Problema PCV </span>
	</header>

	<section class="roSelect-map">
		<h2 class="roH2">Selecione a cidade de partida</h2>
		<select class="roSelect" autofocus required>
			<option value=""></option>
			<option value="Aracaju">Aracaju</option>
			<option value="Belem">Belém</option>
			<option value="Belo Horizonte">Belo Horizonte</option>
			<option value="Boa Vista">Boa Vista</option>
			<option value="Brasilia">Brasília</option>
			<option value="Campo Grande">Campo Grande</option>
			<option value="Cuiaba">Cuiaba</option>
			<option value="Curitiba">Curitiba</option>
			<option value="Florianopolis">Florianópolis</option>
			<option value="Fortaleza">Fortaleza</option>
			<option value="Goiania">Goiânia</option>
			<option value="Joao Pessoa">João Pessoa</option>
			<option value="Maceio">Maceió</option>
			<option value="Manaus">Manaus</option>
			<option value="Natal">Natal</option>
			<option value="Palmas">Palmas</option>
			<option value="Porto Alegre">Porto Alegre</option>
			<option value="Porto Velho">Porto Velho</option>
			<option value="Recife">Recife</option>
			<option value="Rio Branco">Rio Branco</option>
			<option value="Rio de Janeiro">Rio de Janeiro</option>
			<option value="Salvador">Salvador</option>
			<option value="Sao Luis">São Luís</option>
			<option value="Sao Paulo">São Paulo</option>
			<option value="Teresinha">Teresinha</option>
			<option value="Vitoria">Vitória</option>
		</select>

		<h2 class="roH2">Escolha a quantia de rotas para avaliar</h2>
		<select class="roSelect" required>
			<option value=""></option>
			<option value="400">400</option>
			<option value="800">800</option>
			<option value="1000">1000</option>
		</select>

		<button class="roBtnGerar">Gerar nova rota</button>

	</section>

	<?php
		$distancia = new Cidade;
		$rota = new Rota;

		$eras = 100;
		$popInicial = 999;
		$cidade = 1;
		
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