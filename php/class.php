<?php 
	class cliente { 
		public $nome; 
		public $saldo; 

		public function confirmarrecebimento(){ 
			echo "<br/>Confirmado o recebimento"; 
		} 

		public function pagarconta($valor){ 
		echo "<br/>Foi pago o valor de R$ ".$valor; 
		} 
	} 
?>

<?php 
	include("cliente-class.php"); 

	$tempCliente = new Cliente(); 

	$tempCliente->nome = "WESLEY"; 
	$tempCliente->saldo = 100; 
	$tempCliente->confirmarrecebimento(); 
	$tempCliente->pagarconta(300);

	echo "<br/>Nome do Cliente : ".$tempCliente->nome; 
	echo "<br/>Nome do Saldo : ".$tempCliente->saldo; 
?>

<!-- 
método 01 -> gerar população - cromossomos
método 02 -> avalia melhores e descarta piores - fitness
método 03 -> método -> reprodução - crossover
método 04 -> método -> mutação
método 05 -> avalia melhores e descarta piores - fitness
-->

classe Rota

	atributo cidadesXdistancia

	método - população	-> cromossomos
	método - fitness	-> melhores cromossomos
	método - reprodução	-> crossover
	método - mutação	-> mutação em cromossomos


classe cidade

	array de cidades

	método pega distancia