<?php

include"conexao.php";


$origem= $_GET["origem"];
$destino =$_GET["destino"];
$data=$_GET["data"];
$hora=$_GET["hora"];

//echo $destino;die;


//echo $origem,$destino,$data_ida,$data_volta;die;
if($origem  && $destino  ){
$sql_voo="select * from voo where (( origem LIKE '$origem' ) and (destino LIKE '$destino' ))";
}

if($origem  && !$destino  ){
//echo 'rai' ;die;
$sql_voo="select * from voo where ( origem LIKE '$origem' )";
}

if(!$origem  && $destino ){
$sql_voo="select * from voo where ( destino LIKE '$destino' )";
}

if(!$origem && !$destino  ){
  
echo "não é possivel encontrar"
;
//$sql_voo="select * from voo";

}





//var_dump($sql_voo);die;

// if($registro1){
  
//   $condicao="and";
// //echo "entrou";die;
  
// }else{$condicao="or"; }



// if($data != null && $hora != null){

// $sql_voo= $primeira_query . "$condicao

//       ((  data = '$data'  ) AND (hora = '$hora' )) ";
// }

// if($data != null && $hora == null){
  
//   $sql_voo= $primeira_query . "$condicao
//   (data = '$data') "; 

// }

// if($hora != null &&  $data == null  ){
  
//   $sql_voo= $primeira_query . "$condicao
// (hora = '$hora') "; 

// }

// if($data == null || $hora == null){

// $sql_voo= $primeira_query . "$condicao

//     ((  data = '$data'  ) or (hora = '$hora' )) ";
// }


// echo($sql_voo);die;


$consultas = mysqli_query ($conexao,$sql_voo);
$registros= mysqli_num_rows ($consultas);

//var_dump($registros);die;


$consultas_voo = mysqli_query ($conexao,$sql_voo);

//var_dump($consultas_voo);die;




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