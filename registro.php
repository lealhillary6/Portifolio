<?php
	
	include("cabecalho.php");
	
	$nome = $_POST["nome_atividade"];
	$link = $_POST["link"];
	$data = $_POST["data"]; 
	
	if(isset($_FILES["arquivo"])){
		$x = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = @date("Y-m-d-H-i-s") . $x;
		$pasta = 'arquivos/';
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $pasta.$novo_nome);	
	}
	else{
		echo "Não veio arquivo";
	}
	
	
	if(!file_exists("portfolio.xml")){
		
		$xml = "<?xml version = '1.0' encoding = 'UTF-8'?>
				<portfolio>
					<arquivos>
						<nome>$nome</nome>
						<link>$link</link>
						<data>$data</data>
						<arquivo> $novo_nome </arquivo>
					</arquivos>
				</portfolio>
		";
		
		file_put_contents("portfolio.xml",$xml);
		
	}else{
		
		$xml = simplexml_load_file("portfolio.xml");
		
		$igual = 0;
		$arquivo = $xml->addChild('arquivos');
		
		$arquivo->addChild('nome',$nome);
		$arquivo->addChild('link',$link);
		$arquivo->addChild('data',$data);
		$arquivo->addChild('arquivo',$novo_nome);
		
		file_put_contents("portfolio.xml",$xml->asXML());
		
	}
	
	echo "Cadastro realizado com sucesso.";

?>