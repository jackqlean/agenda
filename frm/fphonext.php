<?php
	require_once ("../config/init.php");
	$reg = mysqli_query($link,"SELECT * FROM phonext");
	
	$tabela = "";
	while($row = mysqli_fetch_array($reg)){
				
		$editar = '<a href=\"alteracao_ramal.php?id='.$row['id'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<a href=\"../op/deletar_ramal.php?id='.$row['id'].'\" onclick=\"return confirm(\'Deseja excluir este ramal?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

		if ($row["local"]=='O') $local = "OMSS";
		if ($row["local"]=='P') $local = "PREFEITURA";
		if ($row["local"]=='C') $local = "CAMARA MUNICIPAL";
		
		$tabela.='{
				  "id":"'.$row['id'].'",
				  "nome":"'.$row['name'].'",
				  "ramal":"'.$row['ramal'].'",
				  "local":"'.$local.'",
				  "acao":"'.$editar.$eliminar.'"
				  },';		
	}	

	$tabela = substr($tabela,0, strlen($tabela) - 1);

	echo '{"data":['.$tabela.']}';	

?>