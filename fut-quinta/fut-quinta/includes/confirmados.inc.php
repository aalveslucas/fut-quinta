<?php
	$sql = "SELECT * FROM $nomeDaTabela";
	$resultado = $conexao->query($sql);

	echo "<table> <tr><th></th><th>Jogador</th><th>Posição</th><th>Confirmação</th></tr>";

	$count = 0;

	while($registro = $resultado->fetch_array())
	{
		$jogadores[$count] = $registro;
		$count = $count+1;
	}

	foreach($jogadores as $jogador)
	{
		echo "<tr>
			<td> $jogador[0] </td>
			<td> $jogador[1] </td>
			<td> {$jogador['posicao']} </td>
			<td> <input type='checkbox' name='confirmado[]' value='$jogador[1]'> Confirmado </input></td>
			</tr>";
	}//fim do foreach
	echo "</table>";
	
	echo "<button type='submit' class='alinha' name='confirmados'> Confirmar </button>";
	
	$confirmados = $_POST['confirmado'];
	
	echo $confirmados;
?>