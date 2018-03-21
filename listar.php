<!DOCTYPE html>

<?php
	include("cabecalho.php");
?>

<html>

	<body>
		
		<table border = "1">
		
			<tr>
			
				<th>Atividade</th>
				<th>Data</th>
				<th>download</th>
				
			
			</tr>
			
	<?php
		$xml = simplexml_load_file("portfolio.xml");
		foreach($xml->children() as $portfolio){
	
		echo"<tr>
				<td><a href = 'http://$portfolio->link'>$portfolio->nome</a></td>
				<td>$portfolio->data</td>
				<td><a href='$portfolio->arquivo' download>Arquivo para baixar</a></td>
			</tr>";
		}
	?>
		
		</table>
	
	</body>

</html>