<?php
	$sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
			id SMALLINT PRIMARY KEY AUTO_INCREMENT,
			nome varchar(20),
			posicao varchar(20),
			caracteristica varchar(20)	
			)";
			
			
	$resultado = $conexao->query($sql) or exit($conexao->error);
?>