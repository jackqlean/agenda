<?php
	require_once ("../config/init.php");
	$reg = mysqli_query($link,"SELECT * FROM contacts");

	$tabela = "";
	while($row = mysqli_fetch_array($reg)){
				
		$editar = '<a href=\"alteracao_contact.php?id='.$row['id'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<a href=\"../op/deletar_contact.php?id='.$row['id'].'\" onclick=\"return confirm(\'Deseja excluir este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

		if ($row["type"]=='O') $tipo = "OUTROS";
		if ($row["type"]=='P') $tipo = "PENSIONISTA";
		if ($row["type"]=='I') $tipo = "INATIVO";
		if ($row["type"]=='A') $tipo = "ATIVO";
				
		$tabela.='{
				  "id":"'.$row['id'].'",
				  "nome":"'.$row['name'].'",
				  "tipo":"'.$tipo.'",
				  "telefone":"'.$row['phone'].'",
				  "telefone2":"'.$row['phone2'].'",
				  "recados":"'.$row['rec'].'",
				  "obs":"'.$row['obs'].'",
				  "email":"'.$row['email'].'",
				  "acao":"'.$editar.$eliminar.'"
				  },';		
	}	

	$tabela = substr($tabela,0, strlen($tabela) - 1);

	echo '{"data":['.$tabela.']}';	

?>