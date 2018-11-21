<?php 
    include 'header.php';
    include 'conexao.php';
    
    
    echo $status;
    
?>

<div id="page-content-wrapper">
            <div class="container">
              
              <h2>Pesquisar Vôo</h2>
                <form action="pesquisa.php" method="get">
                

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Origem</label>
  
  
  
  
  
  
  <div class="col-10">
    
<select name="origem" class="form-control">
		<option value="origem">Selecione a Origem</option> 
		<option value="Acre">Acre</option>
		<option value="Alagoas">Alagoas</option>
		<option value="Amapa">Amapa</option>
		<option value="Amazonas">Amazonas</option>
		<option value="Bahia">Bahia</option>
		<option value="Ceara">Ceara</option>
		<option value="Brasilia">Distrito Federal</option>
		<option value="Espirito Santo">Espirito Santo</option>
		<option value="Goias">Goias</option>
		<option value="Maranhao">Maranhao</option>
		<option value="Mato Grosso">Mato Grosso</option>
		<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
		<option value="Minas Gerais">Minas Gerais</option>
		<option value="Para">Para</option>
		<option value="Paraiba">Paraiba</option>
		<option value="Parana">Parana</option>
		<option value="Pernambuco">Pernambuco</option>
		<option value="Piaui">Piaui</option>
		<option value="Rio de Janeiro">Rio de Janeiro</option>
		<option value="Rio Grande do Norte">Rio Grande do Norte</option>
		<option value="Rio Grande do Sul">Rio Grande do Sul</option>
		<option value="Rondonia">Rondonia</option>
		<option value="Roraima">Roraima</option>
		<option value="Santa Catarina">Santa Catarina</option>
		<option value="Sao Paulo">Sao Paulo</option>
		<option value="Sergipe">Sergipe</option>
		<option value="Tocantins">Tocantins</option>
</select>
    
    
    
    
    
    
    
    
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Destino</label>
  <div class="col-10">
<select name="destino" class="form-control">
		<option value="origem">Selecione a Origem</option> 
		<option value="Acre">Acre</option>
		<option value="Alagoas">Alagoas</option>
		<option value="Amapa">Amapa</option>
		<option value="Amazonas">Amazonas</option>
		<option value="Bahia">Bahia</option>
		<option value="Ceara">Ceara</option>
		<option value="Brasilia">Distrito Federal</option>
		<option value="Espirito Santo">Espirito Santo</option>
		<option value="Goias">Goias</option>
		<option value="Maranhao">Maranhao</option>
		<option value="Mato Grosso">Mato Grosso</option>
		<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
		<option value="Minas Gerais">Minas Gerais</option>
		<option value="Para">Para</option>
		<option value="Paraiba">Paraiba</option>
		<option value="Parana">Parana</option>
		<option value="Pernambuco">Pernambuco</option>
		<option value="Piaui">Piaui</option>
		<option value="Rio de Janeiro">Rio de Janeiro</option>
		<option value="Rio Grande do Norte">Rio Grande do Norte</option>
		<option value="Rio Grande do Sul">Rio Grande do Sul</option>
		<option value="Rondonia">Rondonia</option>
		<option value="Roraima">Roraima</option>
		<option value="Santa Catarina">Santa Catarina</option>
		<option value="Sao Paulo">Sao Paulo</option>
		<option value="Sergipe">Sergipe</option>
		<option value="Tocantins">Tocantins</option>
</select>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Data do Vôo</label>
  <div class="col-10">
    <input class="form-control" name="data" type="date" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">horario</label>
  <div class="col-10">
    <input class="form-control" type="time" name="hora" id="example-datetime-local-input">
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