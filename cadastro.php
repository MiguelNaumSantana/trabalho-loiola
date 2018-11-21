<?php 
    include 'header.php';
    include 'conexao.php';
    
    
    echo $status;
    
?>

<div id="page-content-wrapper">
            <div class="container">
              
              <h2>Cadastro de voo</h2>
                <form action="processa.php" method="post">
                

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Origem</label>
  
  
  
  
  
  
  <div class="col-10">
    
    <select name="origem" class="form-control">
		<option value="origem">Selecione a Origem</option> 
		<option value="AC">Acre</option>
		<option value="AL">Alagoas</option>
		<option value="AP">Amapá</option>
		<option value="AM">Amazonas</option>
		<option value="BA">Bahia</option>
		<option value="CE">Ceará</option>
		<option value="DF">Distrito Federal</option>
		<option value="ES">Espírito Santo</option>
		<option value="GO">Goiás</option>
		<option value="MA">Maranhão</option>
		<option value="MT">Mato Grosso</option>
		<option value="MS">Mato Grosso do Sul</option>
		<option value="MG">Minas Gerais</option>
		<option value="PA">Pará</option>
		<option value="PB">Paraíba</option>
		<option value="PR">Paraná</option>
		<option value="PE">Pernambuco</option>
		<option value="PI">Piauí</option>
		<option value="RJ">Rio de Janeiro</option>
		<option value="RN">Rio Grande do Norte</option>
		<option value="RS">Rio Grande do Sul</option>
		<option value="RO">Rondônia</option>
		<option value="RR">Roraima</option>
		<option value="SC">Santa Catarina</option>
		<option value="SP">São Paulo</option>
		<option value="SE">Sergipe</option>
		<option value="TO">Tocantins</option>
</select>
    
    
    
    
    
    
    
    
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Destino</label>
  <div class="col-10">
    <select class="form-control" name="destino">
		<option value="destino">Selecione o Destino</option> 
		<option value="AC">Acre</option>
		<option value="AL">Alagoas</option>
		<option value="AP">Amapá</option>
		<option value="AM">Amazonas</option>
		<option value="BA">Bahia</option>
		<option value="CE">Ceará</option>
		<option value="DF">Distrito Federal</option>
		<option value="ES">Espírito Santo</option>
		<option value="GO">Goiás</option>
		<option value="MA">Maranhão</option>
		<option value="MT">Mato Grosso</option>
		<option value="MS">Mato Grosso do Sul</option>
		<option value="MG">Minas Gerais</option>
		<option value="PA">Pará</option>
		<option value="PB">Paraíba</option>
		<option value="PR">Paraná</option>
		<option value="PE">Pernambuco</option>
		<option value="PI">Piauí</option>
		<option value="RJ">Rio de Janeiro</option>
		<option value="RN">Rio Grande do Norte</option>
		<option value="RS">Rio Grande do Sul</option>
		<option value="RO">Rondônia</option>
		<option value="RR">Roraima</option>
		<option value="SC">Santa Catarina</option>
		<option value="SP">São Paulo</option>
		<option value="SE">Sergipe</option>
		<option value="TO">Tocantins</option>
</select>
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


                
            </div>
            
<?php include 'footer.php'; ?>            