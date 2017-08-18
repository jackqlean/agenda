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

<div class="page-header">
  <h1>Cadastro de ramal</h1>
</div>

<form class name="cadastro" id="cadastro" method="POST" action="../op/cadastrar_ramal.php" >
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtNome">Nome do ramal</label>  
  <div class="col-md-5">
  <input id="txtNome" name="txtNome" type="text" value="" placeholder="Digite o nome do ramal" class="inputUnico form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtRamal">Ramal</label>  
  <div class="col-md-5">
  <input id="txtRamal" name="txtRamal" type="text" value="" placeholder="Digite o número do ramal" class="inputUnico form-control input-md" required="" maxlength="5" >
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
</fieldset>
</form>
    <script src="../lib/tab.js"></script>
    <script src="../lib/main.js"></script>
</body>
</html>
