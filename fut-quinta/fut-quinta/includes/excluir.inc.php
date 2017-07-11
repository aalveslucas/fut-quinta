<?php
//excluir, do banco de dados, todos os registros de PIs cujo número de alunos participantes é maior que 2

$sql = "DELETE FROM $nomeDaTabela WHERE numeroParticipantes > 2";

$resultado = $conexao->query($sql) or dir ($conexao->error);

$numRegistros = $conexao->affected_rows;

echo "<p> Número de registros na tabela $nomeDaTabela, contendo mais de 2 participantes por equipe, e que foram apagados = $numRegistros </p>";
?>