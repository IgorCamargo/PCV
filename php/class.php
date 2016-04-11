
<?php
	class Cidade {
		
		// --- $distancias['A']['B'] ---
		public $distancias = array(
			'Aracaju'			=>	array('Aracaju' =>0,	'Belem' =>2079,		'Belo Horizonte' =>1578,		'Boa Vista' =>6000,		'Brasilia' =>1652,		'Campo Grande' =>2765,		'Cuiaba' =>2775,		'Curitiba' =>2595,		'Florianopolis' =>2892,		'Fortaleza' =>1183,		'Goiania' =>1848,		'Joao Pessoa' =>611,		'Maceio' =>294,		'Manaus' =>5215,		'Natal' =>788,		'Palmas' =>1662,		'Porto Alegre' =>3296,		'Porto Veho' =>4230,		'Recife' =>501,		'Rio Branco' =>4763,		'Rio de Janeiro' =>1855,		'Salvador' =>356,		'Sao Luis' =>1578,		'Sao Paulo' =>2187,		'Teresinha' =>1142,		'Vitoria' =>1408),
			'Belem'				=>	array('Aracaju' =>2079,	'Belem' =>0,		'Belo Horizonte' =>2824,		'Boa Vista' =>6083,		'Brasilia' =>2120,		'Campo Grande' =>2942,		'Cuiaba' =>2941,		'Curitiba' =>3193,		'Florianopolis' =>3500,		'Fortaleza' =>1610,		'Goiania' =>2017,		'Joao Pessoa' =>2161,		'Maceio' =>2173,	'Manaus' =>5.298,		'Natal' =>2108,		'Palmas' =>1283,		'Porto Alegre' =>3852,		'Porto Veho' =>4397,		'Recife' =>2074,	'Rio Branco' =>4931,		'Rio de Janeiro' =>3250,		'Salvador' =>2100,		'Sao Luis' =>806,		'Sao Paulo' =>2933,		'Teresinha' =>947,		'Vitoria' =>3108),
			'Belo Horizonte'	=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Boa Vista'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Brasilia'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Campo Grande'		=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Cuiaba'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Curitiba'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Florianopolis'		=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Fortaleza'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
			'Goiania'			=>	array('Aracaju' =>0,	'Belem' =>0,		'Belo Horizonte' =>0,			'Boa Vista' =>0,		'Brasilia' =>0,			'Campo Grande' =>0,			'Cuiaba' =>0,			'Curitiba' =>0,			'Florianopolis' =>0,		'Fortaleza' =>0,		'Goiania' =>0,			'Joao Pessoa' =>0,			'Maceio' =>0,		'Manaus' =>0,			'Natal' =>0,		'Palmas' =>0,			'Porto Alegre' =>0,			'Porto Veho' =>0,			'Recife' =>0,		'Rio Branco' =>0,			'Rio de Janeiro' =>0,			'Salvador' =>0,			'Sao Luis' =>0,			'Sao Paulo' =>0,		'Teresinha' =>0,		'Vitoria' =>0),
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

		public function populacao() {
//gera cromossomos das cidades
			$de = 1;											// valor inicio
			// $max = 26;
			$ate = 26;											// valor fim
			$comparacao = 0;

			$cromossomo = range($de,$ate);						// cria o array cromossomo  de 1 a 26

			do {
				for ($i=0; $i<=25; $i++) {						// cria 26 cromossomos aleatórios
					shuffle( $cromossomo );						// embaralha
					$cromossomoRota[$i] = $cromossomo;
				}

				for ($i=0; $i<=25; $i++) {						// verifica se há cromossomos gêmeos, comparando os arrays 1 por todos
					for ($y=0; $y<=25; $y++) {
						if ($i!=$y) {
// array_diff_assoc() - retorna o que há de diferente entre os indices dos arrays
							$comparacao = array_diff_assoc($cromossomoRota[$i], $cromossomoRota[$y]);
							// print_r($comparacao);
							// if ($comparacao == null) {
							// 	echo "tem igual<br>";
							// } else { echo "não tem igual<br>"; }
						}
					}
				}
// enquanto $comparacao for nulo, é porque tem array igual, gera cromossomos novamente
			} while ($comparacao == null);

// imprime os cromossomos
			// for ($i=0; $i<=26; $i++) {
			// 	foreach( $cromossomoRota[$i] AS $cromoRota ) {
			// 		echo $cromoRota."-";
			// 	}
			// 	echo "<br>";
			// }
			return $cromossomoRota;
			
		}

		public function fitness() {
//selheciona os melhores cromossomos
			return "teste";
		}

		public function reproducao() {
//realiza o crossover dos cromossomos
		}

		public function mutacao() {
//realiza mutação dos cromossomos
		}
	}


// testes -------------
// cria objeto distancias
	$distancia = new Cidade;
	$teste = new Rota;
// mostra objeto distancia
	print_r($distancia->getDistancias('Aracaju','Belem'));
// objeto imprime os cromossomos
	// echo "<br>".$teste->populacao();
	// print_r($teste->populacao());
// objeto imprime fitness
	// echo $teste->fitness();



// testes -------------
// $cidades = array('A', 'B', 'C', 'D');
// $distancias = array(
// 	'A'	=> array( 'A' => 0		,'B' => 12		,'C' => 20		,'D' => 30	),
// 	'B'	=> array( 'A' => 12		,'B' => 0		,'C' => 50		,'D' => 25	),
// 	'C'	=> array( 'A' => 20		,'B' => 50		,'C' => 0		,'D' => 10	),
// 	'D'	=> array( 'A' => 30		,'B' => 25		,'C' => 10		,'D' => 0	),
// );

// // Esta linha printa 'Vermelho' na tela
// echo "Distancia entre A e B ".$distancias['A']['B'];

?>