<?php
include "php/conecta.php"; // caminho do seu arquivo de conexão ao banco de dados
session_start();
$sql = "SELECT * FROM professores";
$con = mysqli_query($conexao, $sql) or die('Erro');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Musi Escola de Músicas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/adm.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="media-body">
                <h1 href="index.php" class="mt-0">Musi Escola de Músicas</h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>

                    <li class="nav-item">
                        <p class="nav-link">Usuário logado: <?= $_SESSION["nomeLog"] ?></p>
                    </li>
                </ul>
                <form action="php/sair.php" class="form-inline my-2 my-lg-0">
                    <button class="btn btn-info my-2 my-sm-0 mt-0" type="submit">Sair</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="info">
        <h1>Professores Cadastrados</h1>
    </div>
    <!-- tabelas -->
    <div class="div_select">
        <table class="tabela_select_dados">
            <tr>
                <td>Nome</td>
                <td>Data de nascimento</td>
                <td>CPF</td>
                <td>Curso</td>
            </tr>
            <?php while ($dado = $con->fetch_array()) { ?>
                <tr>
                    <td><?php echo $dado['nome']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($dado['dt_nasc'])); ?></td>
                    <td><?php echo $dado['cpf']; ?></td>
                    <td><?php echo $dado['curso']; ?></td>
                </tr>
            <?php } ?>
        </table>

    </div>

    <section id="comente" class="formulario">
        <div>
            <h1 class="txt-center ">Cadastre aqui!</h1>
            <form action="php/insere_prof.php" method="POST" id="contactForm" data-toggle="validator" data-focus="false">

                <!-- <label for="tNome"> Nome: </label>
                <div class="progress campo">
                    <input class="text-center progress-bar bg-dark" id="tNome" class="text-center" type="text" name="nome" maxlength="50" placeholder="Digite seu nome" required>
                    <p id="inpNome"></p>
                </div>

                <br>

                <label for="dtnasc"> Data de Nascimento: </label>
                <div class="progress campo">
                    <input class="text-center progress-bar bg-dark" id="dtnasc" class="text-center" type="date" name="dtnasc" maxlength="60" onkeypress="data();" placeholder="EX. XXXXXXXX" required>
                </div>
                <br />

                <label for="tCpf">C.P.F: </label>
                <div class="progress campo">
                    <input class="text-center progress-bar bg-dark" class="text-center" type="text" name="tCpf" id="cpf" placeholder="Digite seu C.P.F" maxlength="15" size="20" onkeypress="cpf();" required>
                </div>

                <br />

                <label for="tCurso">Curso:</label>
                <div class="progress campo">
                    <input class="text-center progress-bar bg-dark" type="text" name="curso" id="tCurso" size="20" maxlength="50" placeholder="Digite o curso" required>
                </div> -->


                <div class="form-group">
                    <label for="tNome"> Nome: </label>
                    <input class="form-control-input" id="tNome" type="text" name="nome" required placeholder="Ex: Eleanora">
                    <div class="help-block with-errors"></div>
                </div>

                <br>

                <div class="form-group">
                    <label for="dtnasc"> Data de Nascimento: </label>
                    <input class="form-control-input" id="dtnasc" type="date" name="dtnasc" required>
                    <div class="help-block with-errors"></div>
                </div>

                <br />

                <div class="form-group">
                    <label for="tCpf"> C.P.F: </label>
                    <input class="form-control-input" id="tCpf" maxlength="14" type="text" name="cpf" required placeholder="Ex: XXX.XXX.XXX-XX">
                    <div class="help-block with-errors"></div>
                </div>


                <br />

                <div class="form-group">
                    <label for="tCurso"> Curso: </label>
                    <input class="form-control-input" id="tCurso" type="text" name="curso" required placeholder="Ex: violino">
                    <div class="help-block with-errors"></div>
                </div>


                <div>
                    <br />
                    <button class="btn btn-primary mb-2" id="btnEnviar" type="submit" name="btnEnviar">Cadastrar</button>
                    <button type="reset" class="btn btn-primary mb-2" name="btnCancelar">Limpar</button>
                </div>

                <?php
                if (isset($_SESSION["msg"])) :
                    print $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                endif;
                ?>
            </form>
        </div>
    </section>



    <br />
    <!-- INÍCIO DO RODAPÉ -->
    <!--<Rodape>-->
    <footer class="text-center pos-re">
        <div class="container">
            <div class="footer__box">
                <!-- Logo -->
                <a class="logo" href="index.html">
                    Musi
                </a>

                <p>&copy;2019 MUSI. Todos os direitos reservados.</p>
            </div>
        </div>
        <div class="curve curve-top curve-center"></div>
    </footer>
    <!--</Rodape>-->
    <!-- FIM DO RODAPÉ -->
    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/funcao.js"></script>
</body>

</html>