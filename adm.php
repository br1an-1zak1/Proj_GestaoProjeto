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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Musi Escola de Músicas</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <!-- personalizado -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/default.css">

</head>

<body>
    <header class="main_menu" id="navigation">
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html">Musi</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Início</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Usuário logado: <?= $_SESSION["nomeLog"] ?></a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="packages.html">Galeria</a>
                                    </li> -->
                                </ul>
                            </div>
                            <form action="php/sair.php" class="form-inline my-2 my-lg-0">
                                <button class="btn_1 d-none d-lg-block" type="submit">Sair</button>
                            </form>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="text-center">
        <p><a href="index.php"> Página inicial </a> > Cadastro de Professores</p>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="site-section-heading text-uppercase text-center font-secondary">Professores Cadastrados</h2>
                </div>

            </div>
        </div>
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


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="site-section-heading text-center font-secondary">Cadastre Aqui!</h2>
                </div>

            </div>
        </div>
    </div>
    <section id="comente" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="php/insere_prof.php" method="POST" id="contactForm" data-toggle="validator" data-focus="false">

                        <div class="form-group">
                            <label for="tNome"> Nome: </label>
                            <input class="form-control-input" id="tNome" type="text" name="nome" required placeholder="Ex: Eleanora">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="dtnasc"> Data de Nascimento: </label>
                            <input class="form-control-input" id="dtnasc" type="date" name="dtnasc" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="tCpf"> C.P.F: </label>
                            <input class="form-control-input" id="tCpf" maxlength="14" type="text" name="cpf" required placeholder="Ex: XXX.XXX.XXX-XX">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="tCurso"> Curso: </label>
                            <input class="form-control-input" id="tCurso" type="text" name="curso" required placeholder="Ex: violino">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div>
                            <button class="form-control-submit-button" id="btnEnviar" type="submit" name="btnEnviar">Cadastrar</button>
                            <br />
                            <button class="form-control-submit-button" type="reset" name="btnCancelar">Limpar</button>
                        </div>

                        <?php
                        if (isset($_SESSION["msg"])) :
                            print $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        endif;
                        ?>
                    </form>
                </div>
            </div>
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