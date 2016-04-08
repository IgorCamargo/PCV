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