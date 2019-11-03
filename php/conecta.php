<?php //sem tag de fechamento pq o ducumento inteiro é só php

# PHP 7
$conexao = mysqli_connect('localhost', 'root', ''); //conecta com o banco
$banco = mysqli_select_db($conexao, 'projetonivaldo'); //seleciona o banco
mysqli_set_charset($conexao, 'utf8');

// $sql = mysqli_query($conexao,"select * from login") or die("Erro"); // mistura o sql com o php
/*              CONSULTA DO BANCO
    while($dados=mysqli_fetch_assoc($sql)){
        echo 'ola mundo do '.$dados['nome'].'<br>';
        echo $dados['cpf'].'<br>';
        echo $dados['nome'].'<br>';
        
    }
*/
