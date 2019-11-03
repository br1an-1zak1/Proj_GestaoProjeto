<?php
include "conecta.php"; // caminho do seu arquivo de conexão ao banco de dados
$sql = "SELECT * FROM professores";
$con = mysqli_query($conexao, $sql) or die('Erro');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
  <style>
    .div_select{
      margin: 0 auto;
      width: 450px;
      height: 300px;
      
      overflow: auto;
      
    }

    .tabela_select td,
    .tabela_select_dados td {
      border: none;
      padding: 20px;
      text-align: center;
    }
    .tabela_select td{
      font-weight: bold;
      background-color: #3DC9B3;
    }

    .tabela_select_dados tr:nth-child(even) {
      background-color: #c1eccc;
    }
  </style>
</head>

<body>
  <div class="div_select">
    <table class="tabela_select">
      <tr>
        <td>Nome</td>
        <td>Data de nascimento</td>
        <td>CPF</td>
        <td>Curso</td>
      </tr>
      <table class="tabela_select_dados">
        <?php while ($dado = $con->fetch_array()) { ?>
          <tr>
            <td><?php echo $dado['nome']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($dado['dt_nasc'])); ?></td>
            <td><?php echo $dado['cpf']; ?></td>
            <td><?php echo $dado['curso']; ?></td>
          </tr>
        <?php } ?>
      </table>
    </table>
  </div>

</body>

</html>