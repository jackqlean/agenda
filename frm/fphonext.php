<?php
	require_once ("../config/init.php");
	$reg = mysqli_query($link,"SELECT * FROM phonext");
	
	$tabela = "";
	while($row = mysqli_fetch_array($reg)){
				
		$tabela.='{
				  "nome":"'.$row['name'].'",
				  "ramal":"'.$row['ramal'].'"
				  },';		
	}	

	$tabela = substr($tabela,0, strlen($tabela) - 1);

	echo '{"data":['.$tabela.']}';	

?>