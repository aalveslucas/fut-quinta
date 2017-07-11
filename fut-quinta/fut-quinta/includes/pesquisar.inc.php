<?php
	//mostrar, numa tabela na página web, o título do pi e número de alunos participantes de todos os projetos integradores com data de apresentação anterior a 05/01/2015 E que tenham professor coorientador
	$sql = "SELECT titulo, numeroParticipantes FROM $nomeDaTabela WHERE dataApresentacao < '2015-01-05' AND coorientador = 'sim'";
	
	$resultado = $conexao->query($sql) or die($conexao->error);
	
	//testar se a consulta retornou um ou mais registros
	if($conexao->affected_rows > 0)
		{
		//no mínimo, um registro retornou do banco de dados. Vamos criar o cabeçalho da tabela na página web
		echo "<table>
									<caption> PIs com data anterior a 05/01/2015 E com professor coorientador </caption>
									<tr>
										<th> Título do PI </th>
										<th> Número de participantes </th>
									</tr>";
		//para retirar cada registro que veio da consulta SELECT e mostrá-lo dentro da tabela na página web, precisamos de um laço que utilize o objeto $resultado
		while($registro = $resultado->fetch_array())
			{
				echo "<tr>
											<td> $registro[0] </td>
											<td> {$registro['numeroParticipantes']} </td>
										</tr>";
			}//fim do enquanto
			echo "</table>";
		}
	else
		//nenhum registro retornou da consulta anterior
		echo "<p> Nenhum projeto integrador cadastrado no banco de dados tem professor coorientador E data de apresentação antes de 05/01/2015. </p>";
?>