<?php
//contar numero de PIs cadastrados

$sql = "SELECT COUNT(*) FROM $nomeDaTabela";

$resultado = $conexao->query($sql) or dir ($conexao->error);

$registro = $resultado->fetch_array();

echo "<p> Número de projetos cadastrados na tabela $registro[0] </p>";

?>