<?php

	$benfica = [];
	$benfica = $confirmados;
	
	echo "<table>
									<caption> Benfica </caption>
									<tr>
										<th> Atletas </th>
										<th> Posição</th>
									</tr>";
									
	for(i=1; i<=8; i++)
	{
		echo "<tr>
				<td> $benfica[i] </td>
				</tr>"
	}
	echo "</table>";
?>