<?php 

include 'header.php';
include "conexao.php";

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $sql= "select * from usuarios";
    $consultas = mysqli_query ($conexao,$sql);
    $registros = mysqli_num_rows ($consultas);

    //var_dump($consulta);
?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container">
  <h2>Listagem de usuarios</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Origem</th>
        <th>Destino</th>
        <th>Data de ida</th>
        <th>Data de volta</th>
        <th>Assentos</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($consultas as $consulta): ?>
      <tr>
        <td><?php echo $consulta['nome']; ?></td>
        <td><?php echo $consulta['email']; ?></td>
        <td><?php echo $consulta['origem']; ?></td>
        <td><?php echo $consulta['destino']; ?></td>
        <td><?php echo $consulta['data_ida']; ?></td>
        <td><?php echo $consulta['data_volta']; ?></td>
        <td><?php echo $consulta['assentos']; ?></td>
      </tr>      
      <?php endforeach; ?>
    </tbody>

  </table>
  
  <div class="col-10">
    
    <a class="btn btn-primary" href="cadastro.php" role="button">Cadastrar novo usuario</a>

    
  </div>
</div>
        </div>
        <!-- /#page-content-wrapper -->

    <?php include 'footer.php';?>