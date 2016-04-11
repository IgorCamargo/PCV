<?php
	class Cidade {
		
		// --- $distancias['A']['B'] ---
		public $distancias = array(
			'A'	=> array( 'A' => 0		,'B' => 12		,'C' => 20		,'D' => 30	),
			'B'	=> array( 'A' => 12		,'B' => 0		,'C' => 50		,'D' => 25	),
			'C'	=> array( 'A' => 20		,'B' => 50		,'C' => 0		,'D' => 10	),
			'D'	=> array( 'A' => 30		,'B' => 25		,'C' => 10		,'D' => 0	),
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

		public $cidades = array("A", "B", "C", "D");

		public function populacao() {
//gera cromossomos das cidades
			$de = 1;											// valor inicio
			// $max = 27;
			$ate = 27;											// valor fim
			$comparacao = 0;

			$cromossomo = range($de,$ate);						// cria o cromossomo base de 1 a 27

			do {
				for ($i=0; $i<=27; $i++) {						// cria 27 cromossomos aleatórios
					shuffle( $cromossomo );						// embaralha
					$cromossomoRota[$i] = $cromossomo;
				}

				for ($i=0; $i<=27; $i++) {						// verifica se há cromossomos gêmeos, comparando os arrays 1 por todos
					for ($y=0; $y<=27; $y++) {
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
// enquanto $comparacao for nulo, é porque tem array iguais, gera cromossomos novamente
			} while ($comparacao == null);

// imprime os cromossomos
			// for ($i=0; $i<=27; $i++) {
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
	// print_r($distancia->getDistancias('A','B'));
// objeto imprime os cromossomos
	// echo "<br>".$teste->populacao();
	// print_r($teste->populacao());
// objeto imprime fitness
	echo $teste->fitness();



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

/* código exemplo --------------------------------------------
	class MyClass
	{
	  public $prop1 = "Sou uma propriedade de classe!";
	 
	  // public function setProperty($newval)
	  // {
	  //     $this->prop1 = $newval;
	  // }
	 
	  public function getProperty()
	  {
	      return $this->prop1 . "<br />";
	  }
	}
	 
	// Create two objects
	$obj = new MyClass;
	$obj2 = new MyClass;
	 
	// Mostra o valor de $prop1 de ambos os objetos
	echo $obj->getProperty();
	echo $obj2->getProperty();
	 
	// Atribui novos valores para ambos os objetos
	// $obj->setProperty("Sou um novo valor de propriedade!");
	// $obj2->setProperty("Pertenço à segunda instância!");
	 
	// Mostra o valor de $prop1 de ambos os objetos
	echo $obj->getProperty();
	echo $obj2->getProperty();
------------------------------------------------------------ */

?>