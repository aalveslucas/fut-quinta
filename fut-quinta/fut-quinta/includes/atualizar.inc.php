<?php
//atualizar todos os registros que contenham, na coluna metodologia, o valor "Pesquisa de Campo", em qualquer posição do texto, e mudar a coluna terminalidade para "Aplicação WEB"

$sql = "UPDATE $nomeDaTabela set terminalidade = 'Aplicação para WEB' WHERE metodologia LIKE '%Pesquisa de Campo%'";

$resultado = $conexao->query($sql) or dir ($conexao->error);

$numUpdates = $conexao->affected_rows;

echo "<p> Número de registros na tabela $nomeDaTabela que foram atualizados = $numUpdates </p>";
?> 