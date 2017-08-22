<?php
	require_once ("../config/init.php");
	$reg = mysqli_query($link,"SELECT * FROM contacts");

	$tabela = "";
	while($row = mysqli_fetch_array($reg)){
				
		$editar = '<a href=\"alteracao_contact.php?id='.$row['id'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<a href=\"../op/deletar_contact.php?id='.$row['id'].'\" onclick=\"return confirm(\'Deseja excluir este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

		$tabela.='{
				  "id":"'.$row['id'].'",
				  "nome":"'.$row['name'].'",
				  "telefone":"'.$row['phone'].'",
				  "celular":"'.$row['cel01'].'",
				  "recados":"'.$row['cel02'].'",
				  "obs":"'.$row['obs'].'",
				  "email":"'.$row['email'].'",
				  "acao":"'.$editar.$eliminar.'"
				  },';		
	}	

	$tabela = substr($tabela,0, strlen($tabela) - 1);

	echo '{"data":['.$tabela.']}';	

?>