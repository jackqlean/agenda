<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Cadastro de contatos</title>

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

$sql_query = mysqli_query($link,"SELECT * FROM contacts WHERE id = '".$id."'");

$sql2_query = mysqli_query($link,"SELECT * FROM tipo");

$sql3_query = mysqli_query($link,"SELECT c.type FROM contacts c WHERE id = '".$id."'");

$row = mysqli_fetch_array($sql3_query);
$type = $row["type"];

mysqli_close($link);
//Fecha a conexão com o servidor para poupar recursos de processamento

?>

<div class="page-header">
  <h1>Alteração de contatos</h1>
</div>

<form class name="cadastro" id="cadastro" method="POST" action="../op/alterar_contact.php?id=<?php echo $id ?>" >
<fieldset>
<?php while ($linha = mysqli_fetch_array($sql_query)) 
  
{ ?>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtNome">Nome</label>  
  <div class="col-md-5">
  <input id="txtNome" name="txtNome" type="text" value="<?php echo $linha["name"] ?>" placeholder="Digite o nome do contato" class="inputUnico form-control input-md" required="">
  </div>
</div>

<div class="form-group" >
  <label class="col-md-4 control-label" for="txtTipo">Tipo</label>  
  <div class="col-md-5">
    <select name="txtTipo" id="txtTipo" class="form-control">
  <?php 
      while ($array = mysqli_fetch_array($sql2_query)) { 
       
       $select = $type == $array["type"] ? "selected" : "";

       if ($array["type"]=='O') $tipo = "OUTROS";
       if ($array["type"]=='A') $tipo = "ATIVO";
       if ($array["type"]=='I') $tipo = "INATIVO";
       if ($array["type"]=='P') $tipo = "PENSIONISTA";
            
      ?>
      <?php
      echo "<option value=\"". $array["type"] . "\" $select>" . $tipo . "</option>";
      ?>     
      <?php } ?>
      </select>
    </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtTel">Telefone</label>
  <div class="col-md-5">
    <input type="text" name="txtTel1" id="txtTel1" value="<?php echo $linha["phone"] ?>" placeholder="Digite o número do telefone" class="inputUnico form-control input-md" onkeypress="return txtBoxFormat(this, '(##)####-####', event);"/ maxlength="13" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtCel">Telefone2</label>
  <div class="col-md-5">
    <input type="text" name="txtTel2" id="txtTel2" value="<?php echo $linha["phone2"] ?>" placeholder="Digite o número do telefone" class="inputUnico form-control input-md" onkeypress="return txtBoxFormat(this, '(##)####-####', event);" maxlength="13"/>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtRec">Recados</label>
  <div class="col-md-5">
    <input type="text" name="txtRec" id="txtRec" value="<?php echo $linha["rec"] ?>" placeholder="Digite o número do recado" class="inputUnico form-control input-md" onkeypress="return txtBoxFormat(this, '(##)#####-####', event);" maxlength="14" />
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEmail">Email</label>
  <div class="col-md-5">
    <input type="email" name="txtEmail" id="txtEmail" value="<?php echo $linha["email"] ?>" class="inputUnico form-control input-md"  placeholder="digite seu @email.com.br" />
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtDescricao">Observação</label>  
  <div class="col-md-5">
  <textarea name="txtObservacao" id="txtObservacao" placeholder="Preencha com a observação aqui" class="inputUnico form-control input-md"><?php echo $linha["obs"]?></textarea>
  </div>
</div>
<?php } ?>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnEnviar"></label>
  <div class="col-md-8">
    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">Confirmar</button>
    <button type="reset" id="btnCancelar" name="btnCancelar" class="btn btn-warning">Cancelar</button>
    <input type="button" id="btnFechar" name="btnFechar" value="Fechar" class="btn btn-danger" onclick="javascript:location.href='../frm/pesquisa_contacts.php'">
  </div>
</div>
</fieldset>
</form>
    <script src="../lib/tab.js"></script>
    <script src="../lib/main.js"></script>
</body>
</html>
