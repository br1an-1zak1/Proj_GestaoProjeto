  <?php
  // include "inscricao.php";
  // session_start();
  include 'conecta.php';
  session_start();
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $consulta = mysqli_query($conexao, "select * from login where email='$email' and senha = '$senha'") or die("Erro");

  if (!$dados = mysqli_fetch_assoc($consulta)) {
    $_SESSION['msglog'] = "Email ou senha incorretos!";
    header('location: ../index.php');
    exit();
  } else {
    // $_SESSION['msglog'] = "entrou!";
    $_SESSION['nomeLog'] = $dados['email'];
    header('location: ../adm.php');
    exit();
  }

  ?> 

