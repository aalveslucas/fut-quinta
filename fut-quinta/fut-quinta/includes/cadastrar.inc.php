<?php
	/* esta include preocupa-se:
	a)receber os dados do formulário e sanitizá-los, evitando injeção de SQL
	b)escolher as informações que serão criptografadas
	c)testar se os campos obrigatórios foram fornecidos
	d)transformar a data para o padrão MySQL*/
	
	$nome =  $conexao->escape_string($_POST["nome"]);
	
	$posicao = $conexao->escape_string($_POST["posicao"]);
	
	$caracteristica = $conexao->escape_string($_POST["caracteristica"]);
	
	//criar a consulta de inserção na tabela
	$sql = "INSERT $nomeDaTabela VALUES(
								null,
								'$nome',
								'$posicao',
								'$caracteristica'					
								)";
								
		$resultado = $conexao->query($sql) or die($conexao->error);
		
		echo "<p> Atleta cadastrado com sucesso na tabela $nomeDaTabela. </p>";
?>