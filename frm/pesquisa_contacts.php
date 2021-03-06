<?php
// O trecho de código faz com que force o apache a exibir os erros, que por padrão são ocultos
ini_set('display_errors',0);
ini_set('display_startup_erros',0);
error_reporting(E_ALL);
// =====================================

// Realiza a conexão com o servidor
// Coloca as informações da conexão na variável $link
require_once "../config/init.php";
require_once "_menu.php";
mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Pesquisa de contatos</title>
	<!--<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">-->
	<link rel="stylesheet" href="../lib/css/bootstrap.css">
  <link rel="stylesheet" href="../lib/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
  <script src="../lib/js/jquery-1.10.2.js"></script>
  <!--<script src="../lib/jquery/jquery-ui.js"></script>-->
	<script src="../lib/jcontact.js"></script>
  <script src="../lib/js/jquery.dataTables.min.js"></script>
  <script src="../lib/js/dataTables.bootstrap.min.js"></script>          
  <script src="../lib/js/bootstrap.js"></script>
  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script> 
</head>
<body>

<div style="top:10px;" class="col-md-8 col-md-offset-2">
<form name="" id="" method="POST" action="" />
    <a href="cadastro_contact.php" class="btn btn-primary pull-right menu"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp;Novo contato</a>
</div>

<div style="top:25px;" class="col-md-8 col-md-offset-2"> 
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th align='center' bgColor='#666666'><font color='#FFF'>Nome</th>
            <th align='center' bgColor='#666666'><font color='#FFF'>Tipo</th>
            <th align='center' bgColor='#666666'><font color='#FFF'>Telefone</th>
            <th align='center' bgColor='#666666'><font color='#FFF'>Telefone2</th>
            <th align='center' bgColor='#666666'><font color='#FFF'>Recados</th>
            <th align='center' bgColor='#666666'><font color='#FFF'>Observação</th>
            <th align='center' bgColor='#666666'><font color='#FFF'>Email</th>
            <th width="60" align='center' bgColor='#666666'><font color='#FFF'>Ação</th>   
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
            <th width = '120' align='center' valign='middle' bgColor='#DDDDDD'>Nome</th>
            <th align='center' valign='middle' bgColor='#DDDDDD'>Tipo</th>
            <th width = '120' align='center' valign='middle' bgColor='#DDDDDD'>Telefone</th>
            <th width = '120' align='center' valign='middle' bgColor='#DDDDDD'>Telefone2</th>
            <th width = '120' align='center' valign='middle' bgColor='#DDDDDD'>Recados</th>
            <th align='center' valign='middle' bgColor='#DDDDDD'>Observação</th>  
            <th align='center' valign='middle' bgColor='#DDDDDD'>Email</th>
            <th align='center' valign='middle' bgColor='#DDDDDD'>Ação</th>
            </tr>

        </tfoot>
    </table>    	
</div>
</div>
</form>
<script src="../lib/tab.js"></script>
</body>
</html>