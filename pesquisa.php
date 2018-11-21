<?php

include"conexao.php";


$origem= $_GET["origem"];
$destino =$_GET["destino"];
$data=$_GET["data"];
$hora=$_GET["hora"];


//echo $origem,$destino,$data_ida,$data_volta;


$sql_voo= "select * from voo where (( origem LIKE '$origem%' OR  origem IS NULL) OR  (destino LIKE '$destino%' OR destino is null)) AND
((data = '$data' OR data IS null) AND (hora = '$hora' OR hora is null)) OR (hora = '$hora' OR hora is null)";






$consultas = mysqli_query ($conexao,$sql_voo);
$registros= mysqli_num_rows ($consultas);

//var_dump($registros);


$consultas_voo = mysqli_query ($conexao,$sql_voo);

//var_dump($consultas_voo);




include "header.php";

?>



        <div id="page-content-wrapper">
            <div class="container">
  <h2>Listagem de passagens</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>***</th>
        <th>Origem</th>
        <th>Destino</th>
        <th>data</th>
          <th>horario</th>
          
          
          
    
        
      </tr>
    </thead>
    <tbody>
        <?php foreach($consultas_voo as $consulta): ?>
        
      <tr>
          
          <td>
          <form action="processa.php" method="post">
              
              <input name="id_passagem" type="hidden" value="<?php echo $consulta['id'];?>">
              
              
              
          <div class="col-10">
    <button type="submit" class="btn btn-primary">Comprar passagem</button>
  </div>
              </form>
              </td>
        
        <td><?php echo $consulta['origem']; ?></td>
        <td><?php echo $consulta['destino']; ?></td>
          <td><?php echo $consulta['data']; ?></td>
          <td><?php echo $consulta['hora'];?></td>
          <td>
          
              
              </td>
          
        
            
          
            
        
      </tr>      
      <?php endforeach; ?>
    </tbody>

  </table>
  
  
</div>
        </div>





































<?php include "footer.php";?>