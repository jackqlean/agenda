<?php
session_start();
require_once "check.php";
?>
<?php 
// O trecho de c�digo faz com que force o apache a exibir os erros, que por padr�o s�o ocultos
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
// =====================================

/*require_once "../config/init.php";
require_once "../config/functions.php";*/


$cod = $_GET["cod"];

$tipo = $_POST['txtTipo'];
$assunto = $_POST['txtAssunto'];
$descricao = $_POST['txtDescricao'];
$setor = $_POST['txtSetor'];
// Executa a instru��o SQL para alterar registros
// O campo c�digo como � chave prim�ria e est� marcado na tabela como AUTO_INCREMENT n�o necessita passar um valor

update_proc($link);

// Fecha a conex�o com o servidor para poupar recursos de processamento
desconecta($link);

?>

