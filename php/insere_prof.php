<?php
  include "conecta.php";
  session_start();
  $nome = $_POST['nome'];
  $dt_nasc = $_POST['dtnasc'];
  $cpf = $_POST['cpf']; 
  $curso = $_POST['curso'];  
  $dt_nasc = implode('-', array_reverse(explode('/', $dt_nasc)));

  //inserir dados novos;
  $sql = "INSERT INTO professores(nome, dt_nasc, cpf, curso) VALUES ( '$nome', '$dt_nasc', '$cpf', '$curso')";
    if (mysqli_query($conexao, $sql)) {
       $_SESSION['msg'] = "Dados inseridos com sucesso!";
       header('location: ../adm.php');
       exit();
    } else {
        // echo 'Ocorreu algum erro ' . $sql . '<br>' . mysqli_error($conexao);
        $_SESSION['msg'] = "Houve um erro ao inserir o professor!";
        header('location: ../adm.php');
        exit();
    }
    
?>