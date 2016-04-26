<?php
	/**
	* classe responsável para conexão com o banco de dados
	*/
	class Conect {
		
		private function cidade($con) {

			$slctCidades = $con->query("SELECT id, CidadeRef FROM historico_rota order by id");

			while( $cit = $slctCidades->fetch_array() ) {
				// echo "Cidade ".$cit['id']." com id ".$cit['CidadeRef']."<br>";
			}

			return $slctCidades;

		}

		public function getCidade($con) {
			return $this->cidade($con);
		}

		public function setCidade($con, $cit, $rot) {
			print_r($cidades = $this->cidade($con));

			while ( $cit = $cidades->fetch_array() ) {
				echo $cit['CidadeRef']."<br>";
			}
			

// UPDATE historico_rota
// SET Rota = null
// WHERE CidadeRef = 'Aracaju'

		}

	}

	$conexao = new mysqli('localhost:3307', 'root', '', 'pcv');
	$conexao->set_charset('utf8');

	if (mysqli_connect_errno()) {
		printf("<style>h2{color:red;}</style><h2>Ocorreu uma falha na conexão com o banco de dados: %s\n</h2>", mysqli_connect_error());
		exit();
	}

	$conect = new Conect;
	// $conect->getCidade($conexao);
	$cidade = 'Aracaju';
	$rota = '123';
	$conect->setCidade($conexao, $cidade, $rota);

?>