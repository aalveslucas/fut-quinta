<?php
	$sql = "SELECT * FROM $nomeDaTabela order by rand() limit 8";
	
	$resultado = $conexao->query($sql) or die($conexao->error);
	
	$sql = "SELECT * FROM $nomeDaTabela order by rand() limit 8";
	
	$resultado2 = $conexao->query($sql) or die($conexao->error);
	
	//testar se a consulta retornou um ou mais registros
	if($conexao->affected_rows > 0)
		{
		//no mínimo, um registro retornou do banco de dados. Vamos criar o cabeçalho da tabela na página web
		echo "<table>
									<caption> Benfica </caption>
									<tr>
										<th> Atletas </th>
										<th> Posição</th>
									</tr>";
		//para retirar cada registro que veio da consulta SELECT e mostrá-lo dentro da tabela na página web, precisamos de um laço que utilize o objeto $resultado
		while($registro = $resultado->fetch_array())
			{
				echo "<tr>
											<td> $registro[1] </td>
											<td> {$registro['posicao']} </td>
										</tr>";
			}//fim do enquanto
			echo "</table> <br> <br> <br>";
		}
	else
		//nenhum registro retornou da consulta anterior
		echo "<p> Nenhum projeto integrador cadastrado no banco de dados tem professor coorientador E data de apresentação antes de 05/01/2015. </p>";
		
			if($conexao->affected_rows > 0)
		{
		//no mínimo, um registro retornou do banco de dados. Vamos criar o cabeçalho da tabela na página web
		echo "<table>
									<caption> Porto </caption>
									<tr>
										<th> Atletas </th>
										<th> Posição</th>
									</tr>";
		//para retirar cada registro que veio da consulta SELECT e mostrá-lo dentro da tabela na página web, precisamos de um laço que utilize o objeto $resultado
		while($registro = $resultado2->fetch_array())
			{
				echo "<tr>
											<td> $registro[1] </td>
											<td> {$registro['posicao']} </td>
										</tr>";
			}//fim do enquanto
			echo "</table>";
		}
	else
		//nenhum registro retornou da consulta anterior
		echo "<p> Nenhum projeto integrador cadastrado no banco de dados tem professor coorientador E data de apresentação antes de 05/01/2015. </p>";
?>