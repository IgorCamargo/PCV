<?php

	// criar arquivo
	$arquivo = fopen('rotas.txt','r');
	if ($arquivo == false) die('Não foi possível abrir o arquivo.');
	$linha = fgets($arquivo);
	echo $linha;
	fclose($arquivo);

?>