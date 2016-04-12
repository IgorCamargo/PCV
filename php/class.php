<!--  -->
<?php
	class Cidade {
		
		public $distancias = array(
			'Aracaju'			=>	array('Aracaju' =>0,	'Belem' =>2079,		'Belo Horizonte' =>1578,		'Boa Vista' =>6000,		'Brasilia' =>1652,		'Campo Grande' =>2765,		'Cuiaba' =>2775,		'Curitiba' =>2595,		'Florianopolis' =>2892,		'Fortaleza' =>1183,		'Goiania' =>1848,		'Joao Pessoa' =>611,		'Maceio' =>294,		'Manaus' =>5215,		'Natal' =>788,		'Palmas' =>1662,		'Porto Alegre' =>3296,		'Porto Veho' =>4230,		'Recife' =>501,		'Rio Branco' =>4763,		'Rio de Janeiro' =>1855,		'Salvador' =>356,		'Sao Luis' =>1578,		'Sao Paulo' =>2187,		'Teresinha' =>1142,		'Vitoria' =>1408),
			'Belem'				=>	array('Aracaju' =>2079,	'Belem' =>0,		'Belo Horizonte' =>2824,		'Boa Vista' =>6083,		'Brasilia' =>2120,		'Campo Grande' =>2942,		'Cuiaba' =>2941,		'Curitiba' =>3193,		'Florianopolis' =>3500,		'Fortaleza' =>1610,		'Goiania' =>2017,		'Joao Pessoa' =>2161,		'Maceio' =>2173,	'Manaus' =>5.298,		'Natal' =>2108,		'Palmas' =>1283,		'Porto Alegre' =>3852,		'Porto Veho' =>4397,		'Recife' =>2074,	'Rio Branco' =>4931,		'Rio de Janeiro' =>3250,		'Salvador' =>2100,		'Sao Luis' =>806,		'Sao Paulo' =>2933,		'Teresinha' =>947,		'Vitoria' =>3108),
			'Belo Horizonte'	=>	array('Aracaju' =>1578,	'Belem' =>2824,		'Belo Horizonte' =>0,			'Boa Vista' =>4736,		'Brasilia' =>716,		'Campo Grande' =>1453,		'Cuiaba' =>1594,		'Curitiba' =>1004,		'Florianopolis' =>1301,		'Fortaleza' =>2528,		'Goiania' =>906,		'Joao Pessoa' =>2171,		'Maceio' =>1854,	'Manaus' =>3951,		'Natal' =>2348,		'Palmas' =>1690,		'Porto Alegre' =>1712,		'Porto Veho' =>3050,		'Recife' =>2061,	'Rio Branco' =>3584,		'Rio de Janeiro' =>434,			'Salvador' =>1372,		'Sao Luis' =>2738,		'Sao Paulo' =>586,		'Teresinha' =>2302,		'Vitoria' =>524),
			'Boa Vista'			=>	array('Aracaju' =>6000,	'Belem' =>6083,		'Belo Horizonte' =>4736,		'Boa Vista' =>0,		'Brasilia' =>4275,		'Campo Grande' =>3836,		'Cuiaba' =>3142,		'Curitiba' =>4821,		'Florianopolis' =>5128,		'Fortaleza' =>6548,		'Goiania' =>4076,		'Joao Pessoa' =>6593,		'Maceio' =>6279,	'Manaus' =>785,			'Natal' =>6770,		'Palmas' =>4926,		'Porto Alegre' =>5348,		'Porto Veho' =>1686,		'Recife' =>6483,	'Rio Branco' =>2230,		'Rio de Janeiro' =>5159,		'Salvador' =>5794,		'Sao Luis' =>6120,		'Sao Paulo' =>4756,		'Teresinha' =>6052,		'Vitoria' =>5261),
			'Brasilia'			=>	array('Aracaju' =>1652,	'Belem' =>2120,		'Belo Horizonte' =>716,			'Boa Vista' =>4275,		'Brasilia' =>0,			'Campo Grande' =>1134,		'Cuiaba' =>1133,		'Curitiba' =>1366,		'Florianopolis' =>1673,		'Fortaleza' =>2200,		'Goiania' =>209,		'Joao Pessoa' =>2245,		'Maceio' =>1930,	'Manaus' =>3490,		'Natal' =>2422,		'Palmas' =>973,			'Porto Alegre' =>2027,		'Porto Veho' =>2589,		'Recife' =>2135,	'Rio Branco' =>3123,		'Rio de Janeiro' =>1148,		'Salvador' =>1446,		'Sao Luis' =>2157,		'Sao Paulo' =>1015,		'Teresinha' =>1789,		'Vitoria' =>1239),
			'Campo Grande'		=>	array('Aracaju' =>2765,	'Belem' =>2942,		'Belo Horizonte' =>1453,		'Boa Vista' =>3836,		'Brasilia' =>1134,		'Campo Grande' =>0,			'Cuiaba' =>694,			'Curitiba' =>991,		'Florianopolis' =>1298,		'Fortaleza' =>3407,		'Goiania' =>935,		'Joao Pessoa' =>3357,		'Maceio' =>3040,	'Manaus' =>3051,		'Natal' =>3534,		'Palmas' =>1785,		'Porto Alegre' =>1518,		'Porto Veho' =>2150,		'Recife' =>3247,	'Rio Branco' =>2684,		'Rio de Janeiro' =>1444,		'Salvador' =>2568,		'Sao Luis' =>2979,		'Sao Paulo' =>1014,		'Teresinha' =>2911,		'Vitoria' =>1892),
			'Cuiaba'			=>	array('Aracaju' =>2775,	'Belem' =>2941,		'Belo Horizonte' =>1594,		'Boa Vista' =>3142,		'Brasilia' =>1133,		'Campo Grande' =>694,		'Cuiaba' =>0,			'Curitiba' =>1679,		'Florianopolis' =>1986,		'Fortaleza' =>3406,		'Goiania' =>934,		'Joao Pessoa' =>3366,		'Maceio' =>3049,	'Manaus' =>2357,		'Natal' =>3543,		'Palmas' =>1784,		'Porto Alegre' =>2206,		'Porto Veho' =>1456,		'Recife' =>3255,	'Rio Branco' =>1990,		'Rio de Janeiro' =>2017,		'Salvador' =>2566,		'Sao Luis' =>2978,		'Sao Paulo' =>1614,		'Teresinha' =>2910,		'Vitoria' =>2119),
			'Curitiba'			=>	array('Aracaju' =>2595,	'Belem' =>3193,		'Belo Horizonte' =>1004,		'Boa Vista' =>4821,		'Brasilia' =>1366,		'Campo Grande' =>991,		'Cuiaba' =>1679,		'Curitiba' =>0,			'Florianopolis' =>300,		'Fortaleza' =>3541,		'Goiania' =>1186,		'Joao Pessoa' =>3188,		'Maceio' =>2871,	'Manaus' =>4036,		'Natal' =>3365,		'Palmas' =>2036,		'Porto Alegre' =>711,		'Porto Veho' =>3135,		'Recife' =>3078,	'Rio Branco' =>3669,		'Rio de Janeiro' =>852,			'Salvador' =>2385,		'Sao Luis' =>3230,		'Sao Paulo' =>408,		'Teresinha' =>3143,		'Vitoria' =>1300),
			'Florianopolis'		=>	array('Aracaju' =>2892,	'Belem' =>3500,		'Belo Horizonte' =>1301,		'Boa Vista' =>5128,		'Brasilia' =>1673,		'Campo Grande' =>1298,		'Cuiaba' =>1986,		'Curitiba' =>300,		'Florianopolis' =>0,		'Fortaleza' =>3838,		'Goiania' =>1493,		'Joao Pessoa' =>3485,		'Maceio' =>3168,	'Manaus' =>4443,		'Natal' =>3662,		'Palmas' =>2336,		'Porto Alegre' =>476,		'Porto Veho' =>3442,		'Recife' =>3375,	'Rio Branco' =>3976,		'Rio de Janeiro' =>1144,		'Salvador' =>2682,		'Sao Luis' =>3537,		'Sao Paulo' =>705,		'Teresinha' =>3450,		'Vitoria' =>1597),
			'Fortaleza'			=>	array('Aracaju' =>1183,	'Belem' =>1610,		'Belo Horizonte' =>2528,		'Boa Vista' =>6548,		'Brasilia' =>2200,		'Campo Grande' =>3407,		'Cuiaba' =>3406,		'Curitiba' =>3541,		'Florianopolis' =>3838,		'Fortaleza' =>0,		'Goiania' =>2482,		'Joao Pessoa' =>688,		'Maceio' =>1075,	'Manaus' =>5763,		'Natal' =>537,		'Palmas' =>2035,		'Porto Alegre' =>4242,		'Porto Veho' =>4862,		'Recife' =>800,		'Rio Branco' =>5396,		'Rio de Janeiro' =>2805,		'Salvador' =>1389,		'Sao Luis' =>1070,		'Sao Paulo' =>3127,		'Teresinha' =>634,		'Vitoria' =>2397),
			'Goiania'			=>	array('Aracaju' =>1848,	'Belem' =>2017,		'Belo Horizonte' =>906,			'Boa Vista' =>4076,		'Brasilia' =>209,		'Campo Grande' =>935,		'Cuiaba' =>934,			'Curitiba' =>1186,		'Florianopolis' =>1493,		'Fortaleza' =>2482,		'Goiania' =>0,			'Joao Pessoa' =>2442,		'Maceio' =>2125,	'Manaus' =>3291,		'Natal' =>2618,		'Palmas' =>874,			'Porto Alegre' =>1847,		'Porto Veho' =>2390,		'Recife' =>2332,	'Rio Branco' =>2924,		'Rio de Janeiro' =>1338,		'Salvador' =>1643,		'Sao Luis' =>2054,		'Sao Paulo' =>926,		'Teresinha' =>1986,		'Vitoria' =>1428),
			'Joao Pessoa'		=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Maceio'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Manaus'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Natal'				=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Palmas'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Porto Alegre'		=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Porto Veho'		=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Recife'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Rio Branco'		=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Rio de Janeiro'	=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Salvador'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Sao Luis'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Sao Paulo'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Teresinha'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Vitoria'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),

			// 'A'	=> array( 'A' => 0		,'B' => 12		,'C' => 20		,'D' => 30	),
			// 'B'	=> array( 'A' => 12		,'B' => 0		,'C' => 50		,'D' => 25	),
			// 'C'	=> array( 'A' => 20		,'B' => 50		,'C' => 0		,'D' => 10	),
			// 'D'	=> array( 'A' => 30		,'B' => 25		,'C' => 10		,'D' => 0	),
		);


		// public function setDistancias($newval)
		// {
		// 	$this->prop1 = $newval;
		// }
		
		public function getDistancias($partida, $chegada) {
			return $this->distancias[$partida][$chegada];
		}

	}


	class Rota {

		public $cidades = array('Aracaju','Belem','Belo Horizonte','Boa Vista','Brasilia','Campo Grande','Cuiaba','Curitiba','Florianopolis','Fortaleza','Goiania','Joao Pessoa','Maceio','Manaus','Natal','Palmas','Porto Alegre','Porto Veho','Recife','Rio Branco','Rio de Janeiro','Salvador','Sao Luis','Sao Paulo','Teresinha','Vitoria');

//gera cromossomos das cidades
		public function populacao($qntCromossomo) {
		// $qntCromossomo - quantidade de cromossomos a gerar
			$de = 1;											// valor inicio
			$ate = 26;											// valor fim
			$comparacao = 0;									// variável usada no teste de comparação
			$x = 1;
			$cromossomo = range($de,$ate);						// cria o array cromossomo de 1 a 26 (cidades a passar)

			do {
				for ($i=0; $i<=$qntCromossomo; $i++) {			// cria cromossomos aleatórios de acordo com a variável $qntCromossomo
					shuffle( $cromossomo );						// embaralha o cromossomo de forma rândomica
					$cromossomoRota[$i] = $cromossomo;			// $cromossomoRota recebe cromossomo embaralhado
				}

				// verifica se há cromossomos gêmeos, comparando os arrays 1 por todos
				for ($i=0; $i<=$qntCromossomo; $i++) {
					for ($y=0; $y<=$qntCromossomo; $y++) {
						if ($i!=$y) {
							// array_diff_assoc() - retorna o que há de diferente entre os indices dos arrays
							$comparacao = array_diff_assoc($cromossomoRota[$i], $cromossomoRota[$y]);
						}
					}
				}
			// enquanto $comparacao for nulo, é porque tem array igual, então gera cromossomos novamente
			} while ($comparacao == null);

			// imprime os cromossomos
			for ($i=0; $i<=$qntCromossomo; $i++) {
				// echo "first cromo ".$cromossomoRota[$i][0];
				$cromossomoRota[$i][26] = $cromossomoRota[$i][0];		// adiciona mais uma posição ao array cromossomo e coloca o valor da posição 0 na última posição
				// echo " -> ".$cromossomoRota[$i][26]." <- ";
				// echo " cromossomo ".$x." -> ";
				// foreach( $cromossomoRota[$i] AS $cromoRota ) {
					// echo $cromoRota."-";
				// }
				// echo "<br>";$x++;
			}
			return $cromossomoRota;
		}

//selheciona os melhores cromossomos
		public function fitness($cromossomoParaFitness, $qntCromossomo) {
		// inicializa o array com valores zero
			for ($a=0; $a<=$qntCromossomo ; $a++) {			
				$somaFitness[$a] = 0;
			}

			for ($i=0; $i<=9; $i++) {
				for ($y=0; $y<=26 ; $y++) { 
					// echo $cromossomoParaFitness[$i][$y]."-";
// ***** ajustar para comparar o valor no array como sendo o indice do array cidades
// ***** alterar para somar valores das distancias da matriz distancias
// ***** está somando os valores contido no arrya
					$somaFitness[$i] = $somaFitness[$i]+$cromossomoParaFitness[$i][$y];
				}
				// echo "soma valores ".$somaFitness[$i];
				// echo "<br>";
			}

			return $somaFitness;
		}

//realiza o crossover dos cromossomos
		public function reproducao() {

		}

//realiza mutação dos cromossomos
		public function mutacao() {

		}
	}


// testes -------------
// cria objeto distancias
	$distancia = new Cidade;
	$rota = new Rota;

// objeto imprime os cromossomos passando como parâmetro o tamanho da população
	// echo "<br>".$rota->populacao(499);
	// print_r($rota->populacao(9));

// objeto imprime fitness
	// $distanciaCidade = $rota->populacao(9);	// gera rotas, mas terei que passar um array já com as distancias corretas, e não rota nova
	// print_r($rota->fitness($distanciaCidade, 9));

// mostra objeto distancia
	print_r($distancia->getDistancias('Aracaju','Belem'));// preciso da matriz pronta


?>