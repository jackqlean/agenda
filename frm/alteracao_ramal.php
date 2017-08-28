<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Cadastro de ramais</title>

    <meta name="description" content="">
    <meta name="author" content="Jaquison Quintao Leandro">
    <!-- Bootstrap -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../lib/jquery/jquery-1.12.4.js"></script>
</head>
<body>

<?php

$id = $_GET["id"];

// Realiza a conexão com o servidor
// Coloca as informações da conexão na variável $link
require_once "../config/init.php";
// Executa a instrução SQL para selectionar todos os registros
// Se quiser retornar campos específicos só é necessário colocar o nome do campo no lugar do *

$sql_query = mysqli_query($link,"SELECT * FROM phonext WHERE id = '".$id."'");

$sql2_query = mysqli_query($link,"SELECT * FROM local");

$sql3_query = mysqli_query($link,"SELECT p.local FROM phonext p WHERE id = '".$id."'");

$row = mysqli_fetch_array($sql3_query);

$local = $row["local"];


//Fecha a conexão com o servidor para poupar recursos de processamento
mysqli_close($link);
?>

<div class="page-header">
  <h1>Cadastro de ramal</h1>
</div>

<form class name="cadastro" id="cadastro" method="POST" action="../op/alterar_ramal.php?id=<?php echo $id ?>" >
<fieldset>

<?php while ($linha = mysqli_fetch_array($sql_query)) { ?>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtNome">Nome do ramal</label>  
  <div class="col-md-5">
  <input id="txtNome" name="txtNome" type="text" value="<?php echo $linha["name"] ?>" placeholder="Digite o nome do ramal" class="inputUnico form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtRamal">Ramal</label>  
  <div class="col-md-5">
  <input id="txtRamal" name="txtRamal" type="text" value="<?php echo $linha["ramal"] ?>" placeholder="Digite o número do ramal" class="inputUnico form-control input-md" required="" maxlength="5" >
  </div>
</div>


<div class="form-group" >
  <label class="col-md-4 control-label" for="txtLocal">Local</label>  
  <div class="col-md-5">
    <select name="txtLocal" id="txtLocal" class="form-control">
  <?php 
      while ($array = mysqli_fetch_array($sql2_query)) { 
       
       $select = $local == $array["local"] ? "selected" : "";

       if ($array["local"]=='O') $local2 = "OMSS";
       if ($array["local"]=='P') $local2 = "PREFEITURA";
       if ($array["local"]=='C') $local2 = "CAMARA MUNICIPAL";
                   
      ?>
      <?php
      echo "<option value=\"". $array["local"] . "\" $select>" . $local2 . "</option>";
      ?>     
      <?php } ?>
      </select>
    </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnEnviar"></label>
  <div class="col-md-8">
    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">Confirmar</button>
    <button type="reset" id="btnCancelar" name="btnCancelar" class="btn btn-warning">Cancelar</button>
    <input type="button" id="btnFechar" name="btnFechar" value="Fechar" class="btn btn-danger" onclick="javascript:location.href='../frm/pesquisa_ramal.php'">
  </div>
</div>
<?php } ?>
</fieldset>
</form>
    <script src="../lib/tab.js"></script>
    <script src="../lib/main.js"></script>
</body>
</html>
