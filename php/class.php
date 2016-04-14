<!--  -->
<?php
	class Cidade {
		
		public $distancias = array(
			'Aracaju'			=>	array('Aracaju' =>0,	'Belem' =>2079,		'Belo Horizonte' =>1578,		'Boa Vista' =>6000,		'Brasilia' =>1652,		'Campo Grande' =>2765,		'Cuiaba' =>2775,		'Curitiba' =>2595,		'Florianopolis' =>2892,		'Fortaleza' =>1183,		'Goiania' =>1848,		'Joao Pessoa' =>611,		'Maceio' =>294,		'Manaus' =>5215,		'Natal' =>788,		'Palmas' =>1662,		'Porto Alegre' =>3296,		'Porto Velho' =>4230,		'Recife' =>501,		'Rio Branco' =>4763,		'Rio de Janeiro' =>1855,		'Salvador' =>356,		'Sao Luis' =>1578,		'Sao Paulo' =>2187,		'Teresinha' =>1142,		'Vitoria' =>1408),
			'Belem'				=>	array('Aracaju' =>2079,	'Belem' =>0,		'Belo Horizonte' =>2824,		'Boa Vista' =>6083,		'Brasilia' =>2120,		'Campo Grande' =>2942,		'Cuiaba' =>2941,		'Curitiba' =>3193,		'Florianopolis' =>3500,		'Fortaleza' =>1610,		'Goiania' =>2017,		'Joao Pessoa' =>2161,		'Maceio' =>2173,	'Manaus' =>5298,		'Natal' =>2108,		'Palmas' =>1283,		'Porto Alegre' =>3852,		'Porto Velho' =>4397,		'Recife' =>2074,	'Rio Branco' =>4931,		'Rio de Janeiro' =>3250,		'Salvador' =>2100,		'Sao Luis' =>806,		'Sao Paulo' =>2933,		'Teresinha' =>947,		'Vitoria' =>3108),
			'Belo Horizonte'	=>	array('Aracaju' =>1578,	'Belem' =>2824,		'Belo Horizonte' =>0,			'Boa Vista' =>4736,		'Brasilia' =>716,		'Campo Grande' =>1453,		'Cuiaba' =>1594,		'Curitiba' =>1004,		'Florianopolis' =>1301,		'Fortaleza' =>2528,		'Goiania' =>906,		'Joao Pessoa' =>2171,		'Maceio' =>1854,	'Manaus' =>3951,		'Natal' =>2348,		'Palmas' =>1690,		'Porto Alegre' =>1712,		'Porto Velho' =>3050,		'Recife' =>2061,	'Rio Branco' =>3584,		'Rio de Janeiro' =>434,			'Salvador' =>1372,		'Sao Luis' =>2738,		'Sao Paulo' =>586,		'Teresinha' =>2302,		'Vitoria' =>524),
			'Boa Vista'			=>	array('Aracaju' =>6000,	'Belem' =>6083,		'Belo Horizonte' =>4736,		'Boa Vista' =>0,		'Brasilia' =>4275,		'Campo Grande' =>3836,		'Cuiaba' =>3142,		'Curitiba' =>4821,		'Florianopolis' =>5128,		'Fortaleza' =>6548,		'Goiania' =>4076,		'Joao Pessoa' =>6593,		'Maceio' =>6279,	'Manaus' =>785,			'Natal' =>6770,		'Palmas' =>4926,		'Porto Alegre' =>5348,		'Porto Velho' =>1686,		'Recife' =>6483,	'Rio Branco' =>2230,		'Rio de Janeiro' =>5159,		'Salvador' =>5794,		'Sao Luis' =>6120,		'Sao Paulo' =>4756,		'Teresinha' =>6052,		'Vitoria' =>5261),
			'Brasilia'			=>	array('Aracaju' =>1652,	'Belem' =>2120,		'Belo Horizonte' =>716,			'Boa Vista' =>4275,		'Brasilia' =>0,			'Campo Grande' =>1134,		'Cuiaba' =>1133,		'Curitiba' =>1366,		'Florianopolis' =>1673,		'Fortaleza' =>2200,		'Goiania' =>209,		'Joao Pessoa' =>2245,		'Maceio' =>1930,	'Manaus' =>3490,		'Natal' =>2422,		'Palmas' =>973,			'Porto Alegre' =>2027,		'Porto Velho' =>2589,		'Recife' =>2135,	'Rio Branco' =>3123,		'Rio de Janeiro' =>1148,		'Salvador' =>1446,		'Sao Luis' =>2157,		'Sao Paulo' =>1015,		'Teresinha' =>1789,		'Vitoria' =>1239),
			'Campo Grande'		=>	array('Aracaju' =>2765,	'Belem' =>2942,		'Belo Horizonte' =>1453,		'Boa Vista' =>3836,		'Brasilia' =>1134,		'Campo Grande' =>0,			'Cuiaba' =>694,			'Curitiba' =>991,		'Florianopolis' =>1298,		'Fortaleza' =>3407,		'Goiania' =>935,		'Joao Pessoa' =>3357,		'Maceio' =>3040,	'Manaus' =>3051,		'Natal' =>3534,		'Palmas' =>1785,		'Porto Alegre' =>1518,		'Porto Velho' =>2150,		'Recife' =>3247,	'Rio Branco' =>2684,		'Rio de Janeiro' =>1444,		'Salvador' =>2568,		'Sao Luis' =>2979,		'Sao Paulo' =>1014,		'Teresinha' =>2911,		'Vitoria' =>1892),
			'Cuiaba'			=>	array('Aracaju' =>2775,	'Belem' =>2941,		'Belo Horizonte' =>1594,		'Boa Vista' =>3142,		'Brasilia' =>1133,		'Campo Grande' =>694,		'Cuiaba' =>0,			'Curitiba' =>1679,		'Florianopolis' =>1986,		'Fortaleza' =>3406,		'Goiania' =>934,		'Joao Pessoa' =>3366,		'Maceio' =>3049,	'Manaus' =>2357,		'Natal' =>3543,		'Palmas' =>1784,		'Porto Alegre' =>2206,		'Porto Velho' =>1456,		'Recife' =>3255,	'Rio Branco' =>1990,		'Rio de Janeiro' =>2017,		'Salvador' =>2566,		'Sao Luis' =>2978,		'Sao Paulo' =>1614,		'Teresinha' =>2910,		'Vitoria' =>2119),
			'Curitiba'			=>	array('Aracaju' =>2595,	'Belem' =>3193,		'Belo Horizonte' =>1004,		'Boa Vista' =>4821,		'Brasilia' =>1366,		'Campo Grande' =>991,		'Cuiaba' =>1679,		'Curitiba' =>0,			'Florianopolis' =>300,		'Fortaleza' =>3541,		'Goiania' =>1186,		'Joao Pessoa' =>3188,		'Maceio' =>2871,	'Manaus' =>4036,		'Natal' =>3365,		'Palmas' =>2036,		'Porto Alegre' =>711,		'Porto Velho' =>3135,		'Recife' =>3078,	'Rio Branco' =>3669,		'Rio de Janeiro' =>852,			'Salvador' =>2385,		'Sao Luis' =>3230,		'Sao Paulo' =>408,		'Teresinha' =>3143,		'Vitoria' =>1300),
			'Florianopolis'		=>	array('Aracaju' =>2892,	'Belem' =>3500,		'Belo Horizonte' =>1301,		'Boa Vista' =>5128,		'Brasilia' =>1673,		'Campo Grande' =>1298,		'Cuiaba' =>1986,		'Curitiba' =>300,		'Florianopolis' =>0,		'Fortaleza' =>3838,		'Goiania' =>1493,		'Joao Pessoa' =>3485,		'Maceio' =>3168,	'Manaus' =>4443,		'Natal' =>3662,		'Palmas' =>2336,		'Porto Alegre' =>476,		'Porto Velho' =>3442,		'Recife' =>3375,	'Rio Branco' =>3976,		'Rio de Janeiro' =>1144,		'Salvador' =>2682,		'Sao Luis' =>3537,		'Sao Paulo' =>705,		'Teresinha' =>3450,		'Vitoria' =>1597),
			'Fortaleza'			=>	array('Aracaju' =>1183,	'Belem' =>1610,		'Belo Horizonte' =>2528,		'Boa Vista' =>6548,		'Brasilia' =>2200,		'Campo Grande' =>3407,		'Cuiaba' =>3406,		'Curitiba' =>3541,		'Florianopolis' =>3838,		'Fortaleza' =>0,		'Goiania' =>2482,		'Joao Pessoa' =>688,		'Maceio' =>1075,	'Manaus' =>5763,		'Natal' =>537,		'Palmas' =>2035,		'Porto Alegre' =>4242,		'Porto Velho' =>4862,		'Recife' =>800,		'Rio Branco' =>5396,		'Rio de Janeiro' =>2805,		'Salvador' =>1389,		'Sao Luis' =>1070,		'Sao Paulo' =>3127,		'Teresinha' =>634,		'Vitoria' =>2397),
			'Goiania'			=>	array('Aracaju' =>1848,	'Belem' =>2017,		'Belo Horizonte' =>906,			'Boa Vista' =>4076,		'Brasilia' =>209,		'Campo Grande' =>935,		'Cuiaba' =>934,			'Curitiba' =>1186,		'Florianopolis' =>1493,		'Fortaleza' =>2482,		'Goiania' =>0,			'Joao Pessoa' =>2442,		'Maceio' =>2125,	'Manaus' =>3291,		'Natal' =>2618,		'Palmas' =>874,			'Porto Alegre' =>1847,		'Porto Velho' =>2390,		'Recife' =>2332,	'Rio Branco' =>2924,		'Rio de Janeiro' =>1338,		'Salvador' =>1643,		'Sao Luis' =>2054,		'Sao Paulo' =>926,		'Teresinha' =>1986,		'Vitoria' =>1428),
			'Joao Pessoa'		=>	array('Aracaju' =>611,	'Belem' =>2161,		'Belo Horizonte' =>2171,		'Boa Vista' =>6593,		'Brasilia' =>2245,		'Campo Grande' =>3357,		'Cuiaba' =>3366,		'Curitiba' =>3188,		'Florianopolis' =>3485,		'Fortaleza' =>688,		'Goiania' =>2442,		'Joao Pessoa' =>0,			'Maceio' =>395,		'Manaus' =>5808,		'Natal' =>185,		'Palmas' =>2253,		'Porto Alegre' =>3889,		'Porto Velho' =>4822,		'Recife' =>120,		'Rio Branco' =>5356,		'Rio de Janeiro' =>2448,		'Salvador' =>949,		'Sao Luis' =>1660,		'Sao Paulo' =>2770,		'Teresinha' =>1224,		'Vitoria' =>2001),
			'Maceio'			=>	array('Aracaju' =>294,	'Belem' =>2173,		'Belo Horizonte' =>1854,		'Boa Vista' =>6279,		'Brasilia' =>1930,		'Campo Grande' =>3040,		'Cuiaba' =>3049,		'Curitiba' =>2871,		'Florianopolis' =>3168,		'Fortaleza' =>1075,		'Goiania' =>2125,		'Joao Pessoa' =>395,		'Maceio' =>0,		'Manaus' =>5491,		'Natal' =>572,		'Palmas' =>1851,		'Porto Alegre' =>3572,		'Porto Velho' =>4505,		'Recife' =>285,		'Rio Branco' =>5039,		'Rio de Janeiro' =>2131,		'Salvador' =>632,		'Sao Luis' =>1672,		'Sao Paulo' =>2453,		'Teresinha' =>1236,		'Vitoria' =>1684),
			'Manaus'			=>	array('Aracaju' =>5215,	'Belem' =>5298,		'Belo Horizonte' =>3951,		'Boa Vista' =>785,		'Brasilia' =>3490,		'Campo Grande' =>3051,		'Cuiaba' =>2357,		'Curitiba' =>4036,		'Florianopolis' =>4443,		'Fortaleza' =>5763,		'Goiania' =>3291,		'Joao Pessoa' =>5808,		'Maceio' =>5491,	'Manaus' =>0,			'Natal' =>5985,		'Palmas' =>4141,		'Porto Alegre' =>4563,		'Porto Velho' =>901,		'Recife' =>5698,	'Rio Branco' =>1445,		'Rio de Janeiro' =>4374,		'Salvador' =>5009,		'Sao Luis' =>5335,		'Sao Paulo' =>3971,		'Teresinha' =>5267,		'Vitoria' =>4476),
			'Natal'				=>	array('Aracaju' =>788,	'Belem' =>2108,		'Belo Horizonte' =>2348,		'Boa Vista' =>6770,		'Brasilia' =>2422,		'Campo Grande' =>3534,		'Cuiaba' =>3543,		'Curitiba' =>3365,		'Florianopolis' =>3662,		'Fortaleza' =>537,		'Goiania' =>2618,		'Joao Pessoa' =>185,		'Maceio' =>572,		'Manaus' =>5985,		'Natal' =>0,		'Palmas' =>2345,		'Porto Alegre' =>4066,		'Porto Velho' =>4998,		'Recife' =>297,		'Rio Branco' =>5533,		'Rio de Janeiro' =>2625,		'Salvador' =>1126,		'Sao Luis' =>1607,		'Sao Paulo' =>2947,		'Teresinha' =>1171,		'Vitoria' =>2178),
			'Palmas'			=>	array('Aracaju' =>1662,	'Belem' =>1283,		'Belo Horizonte' =>1690,		'Boa Vista' =>4926,		'Brasilia' =>973,		'Campo Grande' =>1785,		'Cuiaba' =>1784,		'Curitiba' =>2036,		'Florianopolis' =>2336,		'Fortaleza' =>2035,		'Goiania' =>874,		'Joao Pessoa' =>2253,		'Maceio' =>1851,	'Manaus' =>4141,		'Natal' =>2345,		'Palmas' =>0,			'Porto Alegre' =>2747,		'Porto Velho' =>0/**/,		'Recife' =>2058,	'Rio Branco' =>3764,		'Rio de Janeiro' =>3124,		'Salvador' =>1454,		'Sao Luis' =>1386,		'Sao Paulo' =>1776,		'Teresinha' =>1401,		'Vitoria' =>2214),
			'Porto Alegre'		=>	array('Aracaju' =>3296,	'Belem' =>3852,		'Belo Horizonte' =>1712,		'Boa Vista' =>5348,		'Brasilia' =>2027,		'Campo Grande' =>1518,		'Cuiaba' =>2206,		'Curitiba' =>711,		'Florianopolis' =>476,		'Fortaleza' =>4242,		'Goiania' =>1847,		'Joao Pessoa' =>3889,		'Maceio' =>3572,	'Manaus' =>4563,		'Natal' =>4066,		'Palmas' =>2747,		'Porto Alegre' =>0,			'Porto Velho' =>3662,		'Recife' =>3779,	'Rio Branco' =>4196,		'Rio de Janeiro' =>1553,		'Salvador' =>3090,		'Sao Luis' =>3891,		'Sao Paulo' =>1109,		'Teresinha' =>3804,		'Vitoria' =>2001),
			'Porto Velho'		=>	array('Aracaju' =>4230,	'Belem' =>4397,		'Belo Horizonte' =>3050,		'Boa Vista' =>1686,		'Brasilia' =>2589,		'Campo Grande' =>2150,		'Cuiaba' =>1456,		'Curitiba' =>3135,		'Florianopolis' =>3442,		'Fortaleza' =>4862,		'Goiania' =>2390,		'Joao Pessoa' =>4822,		'Maceio' =>4505,	'Manaus' =>901,			'Natal' =>4998,		'Palmas' =>0/**/,		'Porto Alegre' =>3662,		'Porto Velho' =>0,			'Recife' =>4712,	'Rio Branco' =>544,			'Rio de Janeiro' =>3473,		'Salvador' =>4023,		'Sao Luis' =>4434,		'Sao Paulo' =>3070,		'Teresinha' =>4366,		'Vitoria' =>3575),
			'Recife'			=>	array('Aracaju' =>501,	'Belem' =>2074,		'Belo Horizonte' =>2061,		'Boa Vista' =>6483,		'Brasilia' =>2135,		'Campo Grande' =>3247,		'Cuiaba' =>3255,		'Curitiba' =>3078,		'Florianopolis' =>3375,		'Fortaleza' =>800,		'Goiania' =>2332,		'Joao Pessoa' =>120,		'Maceio' =>285,		'Manaus' =>5698,		'Natal' =>297,		'Palmas' =>2058,		'Porto Alegre' =>3779,		'Porto Velho' =>4712,		'Recife' =>0,		'Rio Branco' =>5243,		'Rio de Janeiro' =>2338,		'Salvador' =>839,		'Sao Luis' =>1573,		'Sao Paulo' =>2660,		'Teresinha' =>1137,		'Vitoria' =>1831),
			'Rio Branco'		=>	array('Aracaju' =>4763,	'Belem' =>4931,		'Belo Horizonte' =>3584,		'Boa Vista' =>2230,		'Brasilia' =>3123,		'Campo Grande' =>2684,		'Cuiaba' =>1990,		'Curitiba' =>3669,		'Florianopolis' =>3976,		'Fortaleza' =>5396,		'Goiania' =>2924,		'Joao Pessoa' =>5356,		'Maceio' =>5039,	'Manaus' =>1445,		'Natal' =>5533,		'Palmas' =>3764,		'Porto Alegre' =>4196,		'Porto Velho' =>544,		'Recife' =>5243,	'Rio Branco' =>0,			'Rio de Janeiro' =>4007,		'Salvador' =>4457,		'Sao Luis' =>4968,		'Sao Paulo' =>3604,		'Teresinha' =>4900,		'Vitoria' =>4109),
			'Rio de Janeiro'	=>	array('Aracaju' =>1855,	'Belem' =>3250,		'Belo Horizonte' =>434,			'Boa Vista' =>5159,		'Brasilia' =>1148,		'Campo Grande' =>1444,		'Cuiaba' =>2017,		'Curitiba' =>852,		'Florianopolis' =>1144,		'Fortaleza' =>2805,		'Goiania' =>1338,		'Joao Pessoa' =>2448,		'Maceio' =>2131,	'Manaus' =>4374,		'Natal' =>2625,		'Palmas' =>2124,		'Porto Alegre' =>1553,		'Porto Velho' =>3473,		'Recife' =>2338,	'Rio Branco' =>4007,		'Rio de Janeiro' =>0,			'Salvador' =>1649,		'Sao Luis' =>3015,		'Sao Paulo' =>429,		'Teresinha' =>2579,		'Vitoria' =>521),
			'Salvador'			=>	array('Aracaju' =>356,	'Belem' =>2100,		'Belo Horizonte' =>1372,		'Boa Vista' =>5794,		'Brasilia' =>1446,		'Campo Grande' =>2568,		'Cuiaba' =>2566,		'Curitiba' =>2385,		'Florianopolis' =>2682,		'Fortaleza' =>1389,		'Goiania' =>1643,		'Joao Pessoa' =>949,		'Maceio' =>632,		'Manaus' =>5009,		'Natal' =>1126,		'Palmas' =>1454,		'Porto Alegre' =>3090,		'Porto Velho' =>4023,		'Recife' =>839,		'Rio Branco' =>4457,		'Rio de Janeiro' =>1649,		'Salvador' =>0,			'Sao Luis' =>1599,		'Sao Paulo' =>1962,		'Teresinha' =>1163,		'Vitoria' =>1202),
			'Sao Luis'			=>	array('Aracaju' =>1578,	'Belem' =>806,		'Belo Horizonte' =>2738,		'Boa Vista' =>6120,		'Brasilia' =>2157,		'Campo Grande' =>2979,		'Cuiaba' =>2978,		'Curitiba' =>3230,		'Florianopolis' =>3537,		'Fortaleza' =>1070,		'Goiania' =>2054,		'Joao Pessoa' =>1660,		'Maceio' =>1672,	'Manaus' =>5335,		'Natal' =>1607,		'Palmas' =>1386,		'Porto Alegre' =>3891,		'Porto Velho' =>4434,		'Recife' =>1573,	'Rio Branco' =>4968,		'Rio de Janeiro' =>3015,		'Salvador' =>1599,		'Sao Luis' =>0,			'Sao Paulo' =>2970,		'Teresinha' =>446,		'Vitoria' =>2607),
			'Sao Paulo'			=>	array('Aracaju' =>2187,	'Belem' =>2933,		'Belo Horizonte' =>586,			'Boa Vista' =>4756,		'Brasilia' =>1015,		'Campo Grande' =>1014,		'Cuiaba' =>1614,		'Curitiba' =>408,		'Florianopolis' =>705,		'Fortaleza' =>3127,		'Goiania' =>926,		'Joao Pessoa' =>2770,		'Maceio' =>2453,	'Manaus' =>3971,		'Natal' =>2947,		'Palmas' =>1776,		'Porto Alegre' =>1109,		'Porto Velho' =>3070,		'Recife' =>2660,	'Rio Branco' =>3604,		'Rio de Janeiro' =>429,			'Salvador' =>1962,		'Sao Luis' =>2970,		'Sao Paulo' =>0,		'Teresinha' =>2792,		'Vitoria' =>882),
			'Teresinha'			=>	array('Aracaju' =>1142,	'Belem' =>947,		'Belo Horizonte' =>2302,		'Boa Vista' =>6052,		'Brasilia' =>1789,		'Campo Grande' =>2911,		'Cuiaba' =>2910,		'Curitiba' =>3143,		'Florianopolis' =>3450,		'Fortaleza' =>634,		'Goiania' =>1986,		'Joao Pessoa' =>1224,		'Maceio' =>1236,	'Manaus' =>5267,		'Natal' =>1171,		'Palmas' =>1401,		'Porto Alegre' =>3804,		'Porto Velho' =>4366,		'Recife' =>1137,	'Rio Branco' =>4900,		'Rio de Janeiro' =>2579,		'Salvador' =>1163,		'Sao Luis' =>446,		'Sao Paulo' =>2792,		'Teresinha' =>0,		'Vitoria' =>2171),
			'Vitoria'			=>	array('Aracaju' =>1408,	'Belem' =>3108,		'Belo Horizonte' =>524,			'Boa Vista' =>5261,		'Brasilia' =>1239,		'Campo Grande' =>1892,		'Cuiaba' =>2119,		'Curitiba' =>1300,		'Florianopolis' =>1597,		'Fortaleza' =>2397,		'Goiania' =>1428,		'Joao Pessoa' =>2001,		'Maceio' =>1684,	'Manaus' =>4476,		'Natal' =>2178,		'Palmas' =>2214,		'Porto Alegre' =>2001,		'Porto Velho' =>3575,		'Recife' =>1831,	'Rio Branco' =>4109,		'Rio de Janeiro' =>521,			'Salvador' =>1202,		'Sao Luis' =>2607,		'Sao Paulo' =>882,		'Teresinha' =>2171,		'Vitoria' =>0),
		);


		// public function setDistancias($newval)
		// {
		// 	$this->prop1 = $newval;
		// }
		
		public function getDistancias($partida, $chegada) {
			return $this->distancias[$partida][$chegada];
		}

	}


	class Rota extends Cidade {

		public $cidades = array('Aracaju','Belem','Belo Horizonte','Boa Vista','Brasilia','Campo Grande','Cuiaba','Curitiba','Florianopolis','Fortaleza','Goiania','Joao Pessoa','Maceio','Manaus','Natal','Palmas','Porto Alegre','Porto Velho','Recife','Rio Branco','Rio de Janeiro','Salvador','Sao Luis','Sao Paulo','Teresinha','Vitoria');

		// gera cromossomos das cidades passando como parâmetro $qntCromossomo - quantidade de cromossomos a gerar
		public function populacao($qntCromossomo) {
			$de = 1;											// valor inicio
			$ate = 26;											// valor fim
			$comparacao = 0;									// variável usada no teste de comparação
			$x = 1;
			$cromossomo = range($de,$ate);						// cria o array cromossomo de 1 a 26 (cidades a passar)

			do {												// entra em loop até gerar população de cromossomos (rotas) sem repetir
				for ($i=0; $i<=$qntCromossomo; $i++) {			// cria cromossomos aleatórios de acordo com a variável $qntCromossomo
					shuffle( $cromossomo );						// embaralha o cromossomo de forma rândomica
					$cromossomoRota[$i] = $cromossomo;			// $cromossomoRota recebe cromossomo embaralhado
				}

				for ($i=0; $i<=$qntCromossomo; $i++) {			// verifica se há cromossomos gêmeos, comparando os arrays 1 por todos
					for ($y=0; $y<=$qntCromossomo; $y++) {
						if ($i!=$y) {
							// array_diff_assoc() - retorna o que há de diferente entre os indices dos arrays
							$comparacao = array_diff_assoc($cromossomoRota[$i], $cromossomoRota[$y]);
						}
					}
				}
			} while ($comparacao == null);						// enquanto $comparacao for nulo, é porque tem array (cromossomo) iguais, então gera cromossomos novamente

			for ($i=0; $i<=$qntCromossomo; $i++) {				// imprime os cromossomos
				// echo "first cromo ".$cromossomoRota[$i][0];
				// adiciona mais uma posição ao array cromossomo e coloca o valor da posição 0 na última posição
				$cromossomoRota[$i][26] = $cromossomoRota[$i][0];
				// echo " -> ".$cromossomoRota[$i][26]." <- ";
				echo " cromossomo ".$x." -> ";
				foreach( $cromossomoRota[$i] AS $cromoRota ) {
					echo $cromoRota."-";
				}
				echo "<br>";$x++;
			}
			return $cromossomoRota;								// retorna matriz de cromossomos - rotas - gerados
		}

		// selheciona os melhores cromossomos passando como parâmetro a matriz de cromossomos e o tamanho da população que foi gerada
		public function fitness($cromossomoParaFitness, $qntCromossomo) {
			// inicializa as variáveis
			$cidPartida = null;									// cidade partida
			$cidChegada = null;									// cidade chegada
			$indCidPartida = null;								// indice da cidade partida
			$indCidChegada = null;								// indice da cidade partida
			$contador = 0;
			
			$cidades = $this->cidades;							// armazena o objeto array cidades que extende da classe Cidade
			$distancias = $this->distancias;					// armazena o objeto matriz distancias que extende da classe Cidade

			for ($a=0; $a<=$qntCromossomo ; $a++) {				// inicializa o array com valores zero
				$somaFitness[$a] = 0;							// $somaFitness é o array que vai receber a soma das rotas para avaliação
			}

			for ($x=0; $x<=$qntCromossomo; $x++) {
// para conferência // echo "<br>----------------- ROTA ".$contador." ---------------------------<br>";
				for ($y=0; $y<=26 ; $y++) { 
					// echo $cromossomoParaFitness[$x][$y]."-";
					// $somaFitness[$x] = $somaFitness[$x]+$cromossomoParaFitness[$x][$y];
					if ($y+1<=26) {								// armazena o valor que será o indice da cidade e da próxima cidade a ir conforme a rota
						$indPartida = $cromossomoParaFitness[$x][$y];
						$indChegada = $cromossomoParaFitness[$x][$y+1];
// para conferência // echo "<br>----------------------------------------------------<br>";
						// echo "partida ".$indPartida."<br>";
						// echo "chegada ".$indChegada."<br>";
						// $somaFitness[$x] = $somaFitness[$x]+1;
					}

					for ($a=0; $a<=26; $a++) {
						if ($indPartida-1 == $a) {				// identifica o indice da cidade atual verificada na rota
							$cidPartida = $cidades[$a];
							// echo "cid partida ".$cidPartida."<br>";
							$indCidPartida = $cidPartida;		// $indCidPartida recebe o indice da cidade atual
						}

						if ($indChegada-1 == $a) {				// identifica o indice da próxima cidade verificada na rota
							$cidChegada = $cidades[$a];
							// echo "cid chegada ".$cidChegada."<br>";
							$indCidChegada = $cidChegada;		// $indCidPartida recebe o indice da próxima cidade
						}

						// verifica se existe a cidade atual e a próxima cidade e se a próxima cidade existe no array
						if (($indCidPartida != null) && ($indCidChegada != null) && ($y+1<=26)) {
							// $somaFitness[$x] acumula a distancia entre as cidades em verificação
							$somaFitness[$x] = $somaFitness[$x] + $distancias[$indCidPartida][$indCidChegada];
// para conferência // echo "Distancia entre ".$cidPartida." e ".$cidChegada." = ".$distancias[$indCidPartida][$indCidChegada]."<br>";
							// reset nas variáveis para não armazena "lixo"
							$indCidPartida = null;
							$indCidChegada = null;
						}
					}
				}
				// reseta as variáveis para não armazenar "lixo"
				$contador++;
				$cidPartida = null;
				$cidChegada = null;
				$indCidPartida = null;
				$indCidChegada = null;
			}
			asort($somaFitness);								// ordena o array $somaFitness mantendo a associação entre os índices e valores
			$chavesFitness = array_keys($somaFitness);			// $chavesFitness recebe os indices do array $somaFitness como valores

			$this->selecao($somaFitness, $chavesFitness, $cromossomoParaFitness);		// passa para o método selecao o fitness

			echo "<br>Melhor rota é a rota ".$chavesFitness[0]." com ditancia percorrida = ".$somaFitness[$chavesFitness[0]]."km";
		}


// armazena array com as melhores rotas e um array com os indices dessas melhores rotas
		private function selecao($cromossomo, $indCromossomo, $cromossomosRotas) {
			echo "<br>Rotas ordenadas<br>";
			print_r($cromossomo);
			echo "<br>";
			print_r($indCromossomo);
			echo "<br>rota melhor: <br>";
			
			for ($y=0; $y <= 26 ; $y++) { 
				echo $cromossomosRotas[$indCromossomo[0]-1][$y]." - ";
			}

		}


// realiza o crossover dos cromossomos
		public function reproducao() {
			$t = $this->cidades;
			return count($t);
		}


// realiza mutação dos cromossomos
		public function mutacao() {

		}
	}


// testes -------------
// cria objeto distancias
	$distancia = new Cidade;
	$rota = new Rota;

// objeto imprime os cromossomos passando como parâmetro o tamanho da população
	// echo "<br>".$rota->populacao(9);
	// print_r($rota->populacao(9));

// objeto imprime fitness
	$populacao = $rota->populacao(9);	// gera rotas, mas terei que passar um array já com as distancias corretas, e não rota nova
	// print_r($populacao);
	// echo "<br>";
	// print_r($rota->fitness($populacao, 999));
	$rota->fitness($populacao, 9);

// mostra objeto distancia
	// print_r($distancia->getDistancias('Aracaju','Belem'));// preciso da matriz pronta

//
	// echo $rota->reproducao();

?>