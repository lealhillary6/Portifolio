<!DOCTYPE html>

<?php
	include("cabecalho.php");
?>

<html>

	<body>
		
		<form method = "post" action = "registro.php" enctype="multipart/form-data">
		
			<label>Nome atividade: </label>
			<input type = "text" name = "nome_atividade" />
			
			<br />
			
			<label>Link: </label>
			<input type = "text" name = "link" />
			
			<br />
			
			<label>Data</label>
			<input type = "date" name = "data" />
			
			<br />
			
			<label>Arquivo: </label>
			<input type = "file" name = "arquivo" />
			
			<br />

			<input type = "submit" name = "Enviar" />
			
			<br />
		
		</form>
	
	</body>

</html>