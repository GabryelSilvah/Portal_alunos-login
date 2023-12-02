<?php
include("conexao.php");
session_start();
//pega dados digitados no input de login
$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);


//fazer teste de ausencia ou falta de daados no input
if (isset($_POST['usuario']) && !empty($usuario)  && !empty($senha)) {

  //pesquisa por usuário no banco de dados
  $query = mysqli_query($mysqli, "SELECT email FROM usuarios WHERE email = '$usuario' and senha = md5('$senha')");
  $rows = mysqli_num_rows($query);

  //fazer teste de autenticação de dados digitados no input com os dados do db mysql
  if ($rows > 0) {

    //armazena o usuario e a senha na session
    $_SESSION['usuario2'] = $usuario;
    $_SESSION['senha2'] = $senha;

    if ($_SESSION['usuario2'] == true && $_SESSION['senha2'] == true) {
      header("Location: ../home.php");
    } else {

      header("location: ../index.php");
    }
  } else {

    header("Location: ../index.php");
  }
} else {
  echo "Acesso inválido";
}
