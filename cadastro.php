<?php 
    include 'header.php';
    include 'conexao.php';
    $status = $_GET['status'];
    
    echo $status;
    
?>

<div id="page-content-wrapper">
            <div class="container">
              
              <h2>Cadastro de usuarios</h2>
                <form action="processa.php" method="post">
                <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Nome</label>
  <div class="col-10">
    <input class="form-control" name="nome" type="text" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" name="email" type="email"  id="example-search-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Origem</label>
  <div class="col-10">
    <input class="form-control" name="origem"  id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Destino</label>
  <div class="col-10">
    <input class="form-control" name="destino"  id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Data de ida</label>
  <div class="col-10">
    <input class="form-control" name="data_ida" type="datetime-local" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Data de volta</label>
  <div class="col-10">
    <input class="form-control" type="datetime-local" name="data_volta" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Assentos</label>
  <div class="col-10">
    <input class="form-control" type="number" name="assentos"  id="example-number-input">
  </div>
</div>


<div class="form-group row">
  
  <div class="col-10">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  
</div>
</form>

<?php if ($status == 1 ): ?>
<div class="alert alert-success">
  <strong>Successo!</strong> Usuario cadastrado com sucesso
</div>
<?php elseif($status == 2): ?>

<div class="alert alert-danger">
  <strong>Alerta!</strong> Número de vagas atingidas
</div>


<?php endif; ?>
                
            </div>
            
<?php include 'footer.php'; ?>            