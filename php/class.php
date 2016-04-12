
<?php
	class Cidade {
		
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
//************ trocar este trecho por uma função que verifica tamanho do array lenght( $cromossomo );
					$cromossomo[26] = $cromossomo[0];			// adiciona mais uma posição ao array cromossomo e coloca o valor da posição 0 na última posição
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
			// for ($i=0; $i<=$qntCromossomo; $i++) {
			// 	echo "cromossomo ".$x." -> ";
			// 	foreach( $cromossomoRota[$i] AS $cromoRota ) {
			// 		echo $cromoRota."-";
			// 	}
			// 	echo "<br>";$x++;
			// }
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
	// echo "<br>".$rota->populacao(9);
	// print_r($rota->populacao(9));

// objeto imprime fitness
	// $distanciaCidade = $rota->populacao(9);	// gera rotas, mas terei que passar um array já com as distancias corretas, e não rota nova
	// print_r($rota->fitness($distanciaCidade, 9));

// mostra objeto distancia
	print_r($distancia->getDistancias('Aracaju','Belem'));// preciso da matriz pronta


?>