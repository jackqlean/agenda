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
	<title>Pesquisa de ramais</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.css">
  <link rel="stylesheet" href="../lib/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
  <script src="../lib/js/jquery-1.10.2.js"></script>
  <!--<script src="../lib/jquery/jquery-ui.js"></script>-->
  <script src="../lib/js/jquery.dataTables.min.js"></script>
  <script src="../lib/js/dataTables.bootstrap.min.js"></script>          
  <script src="../lib/js/bootstrap.js"></script>
  <script src="../lib/jphonext.js"></script>
</head>
<body>

<div class="col-md-8 col-md-offset-2">
<form name="" id="" method="POST" action="" />
<h1 style="text-align: center;">Pesquisa de ramais
    <a href="cadastro_ramal.php" class="btn btn-primary pull-right menu"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Novo ramal</a>
</h1>
</div>

<div class="col-md-8 col-md-offset-2"> 
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th align='center' bgColor='#666666'><font color='#FFF'>Nome do ramal</th>
            <th align='center' bgColor='#666666'><font color='#FFF'>Ramal</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
            <th width='220' align='center' valign='middle' bgColor='#DDDDDD'>Nome do ramal</th>
            <th width='120' align='center' valign='middle' bgColor='#DDDDDD'>Ramal</th>
            </tr>
        </tfoot>
    </table>      
</div>
</div>
</form>
<script src="../lib/tab.js"></script>
</body>
</html>