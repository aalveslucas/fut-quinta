<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Futebol - Admin </title> 
		<link rel="stylesheet" href="../CSS/formata-fut.css">
</head> 

<body>
	<h1> Futebol Quinta-Feira </h1>
	
	<form action="" method="post" novalidate> 
		<fieldset>
			<legend> Cadastro de Atletas </legend>
			
			<label class="alinha"> Nome: </label> 
			<input type="text" name="nome" autofocus> <br>
			
			<label class="alinha"> Posição: </label>
			<input type="text" name="posicao"> <br>
			
			<label class="alinha"> Característica: </label>
			<input type="text" name="caracteristica"> <br> 
			
		</fieldset>
		
		<div class="botoes">
			<button type="submit" name="cadastrar"> Cadastrar Atleta </button>
			<button type="submit" name="confirmados"> Confirmar Atletas </button>
			<button type="submit" name="gerar-times"> Gerar Times </button>
		</div>	
	</form>
	
<?php
	//chamar as includes que são responsáveis pelas operações de conexão, criação do banco, abertura, criação de tabela, etc...
	
	require "./includes/dados-conexao.inc.php";
	require "./includes/conectar.inc.php";
	require "./includes/criar-banco.inc.php";
	require "./includes/selecionar-banco.inc.php";
	require "./includes/definir-charset.inc.php"; //evita dores de cabeça com acentuação no banco de dados
	require "./includes/criar-tabela.inc.php";
	
	//passo 5 - todas as operações sobre o banco de dados
	if(isset($_POST["cadastrar"]))
		require "./includes/cadastrar.inc.php";
	
	//botão processar informações com todas as outras operações sobr eo banco de dados
	if(isset($_POST["gerar-times"]))
		require "./includes/gerar-times.inc.php";
	
	if(isset($_POST["confirmados"]))
	{
		require "./includes/confirmados.inc.php";
		$confirmados = [];
	}
	
	
	require "./includes/desconectar.inc.php";
?>    
</body> 
</html> 