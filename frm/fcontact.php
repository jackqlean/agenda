<?php
	require_once ("../config/init.php");
	$reg = mysqli_query($link,"SELECT * FROM contacts");
	
	$tabela = "";
	while($row = mysqli_fetch_array($reg)){
				
		$tabela.='{
				  "nome":"'.$row['name'].'",
				  "telefone":"'.$row['phone'].'",
				  "celular":"'.$row['cel01'].'",
				  "recados":"'.$row['cel02'].'",
				  "obs":"'.$row['obs'].'",
				  "email":"'.$row['email'].'"
				  },';		
	}	

	$tabela = substr($tabela,0, strlen($tabela) - 1);

	echo '{"data":['.$tabela.']}';	

?>