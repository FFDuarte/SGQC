<?php

include "C:\laragon\www\TCC-Estacio\banco\conexao.php";




  $matricula =$_POST['matricula'];
  $senha = $_POST['senha'];

  // Validação do usuário/senha digitados
  $sql =("SELECT matricula,senha ,funcao
          from funcionario,`login`
          where matricula = '$matricula'  and senha = '$senha'; ");
  

  $result  = $conn->query($sql);

  if(!$row = $result->fetch_assoc()) {
    
    $_SESSION['errorLogin']="Usuario ou senha inválida";

    echo "<script>alert('Usuario ou senha incorretos);</script>";
 
    header("Location: index.php");
    
    }else{
    
    
    $_SESSION['funcao']=  $row ['funcao'];
   
    if($_SESSION['funcao'] == "adm"){
      header("Location: ../adm/index.php");
      }elseif($_SESSION['funcao'] == "rota"){
      header("Location: ../supervisorPage/index.php");
      }elseif($_SESSION['funcao'] == "inspetor"){
      header("Location: ../inspecao/index.php");
      }else{
        
      }
    }
  ?>
  
  
share  