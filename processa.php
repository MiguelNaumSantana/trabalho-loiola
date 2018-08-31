<?php


    
        
        include_once("conexao.php");
        $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
        $sql= "select * from usuarios";
        $consultas = mysqli_query ($conexao,$sql);
        $registros = mysqli_num_rows ($consultas);
        
        
        echo $registros;
    
        if($registros <= 5){
    
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $origem = $_POST['origem'];
            $destino = $_POST['destino'];
            $data_ida = $_POST['data_ida'];
            $data_volta = $_POST['data_volta'];
            $assentos = $_POST['assentos'];
    
            $sql1 = "insert into usuarios(nome,email,origem,destino,data_ida,data_volta,assentos) values ('$nome','$email','$origem','$destino','$data_ida','$data_volta',$assentos)";
    
            $salvar = mysqli_query($conexao,$sql1); 
            
            
            header("Location: cadastro.php?status=1");
        }   
        else{
        
            header("Location: cadastro.php?status=2");
            
        }
 
        mysqli_close ($conexao); 
?>
