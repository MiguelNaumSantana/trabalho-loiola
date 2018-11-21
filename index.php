<?php 

include 'header.php';
include "conexao.php";




    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $sql= "select * from voo";
    $consultas = mysqli_query ($conexao,$sql);
    $registros = mysqli_num_rows ($consultas);
$sql_usuario = "select * from usuarios";

$consultas_usuario = mysqli_query ($conexao,$sql_usuario);

    //var_dump($consulta);die;
?>

        <!-- Page Content -->
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
        <?php foreach($consultas as $consulta): ?>
        
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
        <!-- /#page-content-wrapper -->

    <?php include 'footer.php';?>