<?php //pega tudo que é salvo nos cookies
//quando passa por sessão é passado os dados pelo get.
session_start();

if (ini_get("session.use_cookies")) {
  $parametros = session_get_cookie_params();
  setcookie(
    session_name(),
    '',
    time() - 42000,
    $parametros["path"],
    $parametros["domain"],
    $parametros["secure"],
    $parametros["httponly"]
  );
};

session_destroy();

header("Location:http://localhost/Proj_GestaoProjeto/index.php");