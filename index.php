<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Musi</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/default.css">
</head>

<body>
    <!--<Menu topo>-->
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
                                        <a class="nav-link" href="#sobre-menu">Notícias</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="packages.html">Galeria</a>
                                    </li> -->
                                </ul>
                            </div>
                            <a href="#login" class="btn_1 d-none d-lg-block">Fazer Login</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--</Menu topo>-->

    <!--<Showcase>-->
    <div id="showcase">
        <div class="container showcase">
            <div class="full-width text-center showcase-caption mt-30">
                <h4>Musi, Escola de música</h4>
                <h1>Os músicos utilizam de todas as liberdades que podem.</h1>
                <p>Ludwig van Beethoven</p>
            </div>
        </div>
    </div>
    <!--</Showcase>-->

    <!--<Sobre>-->
    <main class="site-section" id="sobre-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class=" site-section-heading text-uppercase text-center font-secondary">Notícias</h2>
                </div>
                <div id="features">
                    <div class="features-section-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm features-section-2-col-1 hover-effect">
                                </div>
                                <div class="col-sm features-section-2-col-2 ">
                                    <div class="features-section-2-col-2__content">
                                        <h2>Esta instituição necessita de professores</h2>
                                        <p>
                                            No momento precisamos de professores que possuam as competências necessárias para lecionar aulas nesta instituição. Compareça na secretária para avaliação.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--</Sobre>-->

    <!--<Login>-->
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="site-section-heading text-uppercase text-center font-secondary">Login</h2>
                </div>

            </div>
        </div>
    </div>
    <div id="login" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <!--<Formulario>-->
                    <form action="php/verifica_login.php" method="POST" id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" id="cemail" required>
                            <label class="label-control" for="cemail">Email:</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" name="senha" id="csenha" required>
                            <label class="label-control" for="csenha">Senha:</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="loga" class="form-control-submit-button" value="Login">Acessar</button>
                        </div>
                        <?php
                        if (isset($_SESSION["msglog"])) :
                            print $_SESSION["msglog"];
                            unset($_SESSION["msglog"]);
                        endif;
                        ?>

                    </form>
                    <!--</formulario>-->
                </div>
            </div>
        </div>
    </div>
    <!--</Login>-->

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

    <script src="./js/jquery-1.12.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>