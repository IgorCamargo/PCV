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

		//private function sorteioRandomico() {
		public function sorteioRandomico() {
			// $min = 0;
			// $max = 27;
			
			// for ($i=0; $i <= 27; $i++) { 
			// 	echo $i."<br>";
			// }

			$arr = range(0,27);

			shuffle( $arr );
			foreach( $arr AS $each )
			{
				echo $each, '<br />';
			}

			// return rand($min, $max);
		}

		public function populacao() {
//gera cromossomos das cidades

		}

		public function fitness() {
//selheciona os melhores cromossomos
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
	echo "<br>".$teste->sorteioRandomico();



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