<?php
	$sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";
	$resultado = $conexao->query($sql) or die($conexao->error);
?>