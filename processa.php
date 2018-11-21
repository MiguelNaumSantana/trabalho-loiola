<?php


    
        
        include_once("conexao.php");
        



$id_passagem = $_POST['id_passagem'];

$sql_voo= "select * from usuario_voo where id_voo =".$id_passagem;
$consultas = mysqli_query ($conexao,$sql_voo);
 $registros= mysqli_num_rows ($consultas);



if($registros >= 3){
    echo "Passagem esgotada";
    
}else{
    $sql1 = "insert into usuario_voo(id_usuario,id_voo) values(1,$id_passagem)";
    $salvar = mysqli_query($conexao,$sql1); 
    header("Location: index.php");
    
}
die;
        
  
        mysqli_close ($conexao); 
?>
