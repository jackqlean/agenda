<?php
function desconecta($link){
	mysqli_close($link);
}

function update_contact($link){

global $cod;

$sql = "UPDATE `proc` SET `tipo` = '".$_POST["txtTipo"]."', `assunto` = '".$_POST["txtAssunto"]."', `descricao` = '".$_POST["txtDescricao"]."',`setor` = '".$_POST["txtSetor"]."' WHERE `cod` = ".$cod."";

	if (mysqli_query($link, $sql)) {
    
    	echo "<script language='javascript'>alert('Registro alterado com sucesso...!')</script>";				

		echo "<script language='javascript'>window.location.href='../navegacao.php'</script>";

    
			} else {
    		echo "Erro: " . $sql . "<br>" . mysqli_error($link);
	}

}

function update_req($link){

global $cod, $nome, $tipo, $cpf, $sexo, $tel, $cel, $rec, $email;

$sql = "UPDATE `req` SET `nome` = '".$nome."', `tipo` = '".$tipo."', `cpf` = '".$cpf."', `sexo` = '".$sexo."',`tel` = '".$tel."',`cel` = '".$cel."',
`rec` = '".$rec."', `email` = '".$email."' WHERE `cod` = ".$cod."";

	if (mysqli_query($link, $sql)) {
    
    echo "<script language='javascript'>alert('Registro alterado com sucesso...!')</script>";				

	echo "<script language='javascript'>window.location.href='../navegacao.php'</script>";
    
		} else {
    	echo "Erro: " . $sql . "<br>" . mysqli_error($link);
	}

}

function deleta_contact($link){

global $id;

$sql = "DELETE FROM contacts WHERE id = '$id'";
	
		if (mysqli_query($link, $sql)) {
    
		//confirmar exclusão de dados 

		echo "<script language='javascript'>alert('Processo excluído com sucesso...!')</script>";				

		echo "<script language='javascript'>window.location.href='../navegacao.php'</script>";

    	} else {
    	echo "Erro: " . $sql . "<br>" . mysqli_error($link);
	}

}

function deleta_ramal($link){

global $id;

$sql = "DELETE FROM phonext WHERE cod = '$cod'";
		if (mysqli_query($link, $sql)) {
    	//confirmar exclusão de dados 

		echo "<script language='javascript'>alert('Requerente excluído com sucesso...!')</script>";				

		echo "<script language='javascript'>window.location.href='../navegacao.php'</script>";

    	} else {
    	echo "Erro: " . $sql . "<br>" . mysqli_error($link);
	}
}
?>
