<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

<script src="../lib/jquery/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="../lib/animate/animate.min.css">
<script src="../lib/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="../lib/sweetalert2/dist/sweetalert2.min.css">
<script src="../lib/core-js/core.js"></script>
</head>
<body>
<?php 
// O trecho de código faz com que force o apache a exibir os erros, que por padrão são ocultos
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
// =====================================

require_once "../config/init.php";

$id = $_GET["id"];

$sql = "DELETE FROM contacts WHERE id = '$id'";		

if (mysqli_query($link, $sql)) {
    
echo"<script>
$(document).ready(function () {
swal({
  type: 'success',
  title: 'Contato excluído com sucesso',
  text: '',
  showConfirmButton: false,
  timer: 2000
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      window.location.href='../frm/pesquisa_contacts.php'
    }
  }
)
});
</script>";

		/*echo "<script>location.href='../frm/exibir_proc.php'</script>";*/

		} else {
echo"<script>
$(document).ready(function () {
swal({
  type: 'error',
  title: 'Ocorreu um erro na exclusão. Verifique e tente novamente',
  text: '',
  showConfirmButton: false,
  timer: 2000
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      window.location.href='../frm/pesquisa_contacts.php'
    }
  }
)
});
</script>";
}

// Fecha a conexão com o servidor para poupar recursos de processamento
mysqli_close($link);
?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
   </body>
</html>