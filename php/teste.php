<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>


  <?php 
    session_start();
  ?>


  <form action="insere_prof.php" method="POST" id="espacoBranco" class="formulario" onsubmit="return validar();">

    <label for="nome"> Nome: </label>
    <div class="progress campo">
      <input class="text-center progress-bar bg-dark" id="nome" class="text-center" type="text" name="nome" maxlength="50" placeholder="Digite seu nome" required>
      <p id="inpNome"></p>
    </div>

    <br>

    <label for="dtnasc"> Data de Nascimento: </label>
    <div class="progress campo">
      <input class="text-center progress-bar bg-dark" id="tdataNasc" class="text-center" type="date" id="tdataNasc" name="dtnasc" maxlength="60" placeholder="EX: XX/XX/XXXX" required>
    </div>
    <br>

    <label for="cpf">C.P.F: </label>
    <div class="progress campo">
      <input class="text-center progress-bar bg-dark" class="text-center" type="text" name="cpf" id="cpf" maxlength="15" size="20" placeholder="Ex: XXX.XXX.XXX-XX" onblur="cpf();" required>
    </div>

    <br />

    <label for="curso">Curso:</label>
    <div class="progress campo">
      <input class="text-center progress-bar bg-dark" type="text" name="curso" size="20" maxlength="50" placeholder="Digite o curso" required>
    </div>
    <div>
      <br />
      <button class="btn btn-primary mb-2" id="btnEnviar" type="submit" name="btnEnviar">Enviar</button>
      <button type="reset" class="btn btn-primary mb-2" name="btnCancelar">Remover</button>
    </div>


    <?php 
      if(isset($_SESSION["msg"])):
        print $_SESSION["msg"];
        unset($_SESSION["msg"]);
     endif; 
    ?>
    
    <a href="lista_prof.php">select</a>

  </form>
</body>

</html>