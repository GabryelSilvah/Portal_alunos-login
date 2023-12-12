<?php

class Login
{

  public function logar()
  {


    $_GET['url'] = "home";

    $con = BancoDados::conexao();
    //pega dados digitados no input de login
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      $senha = $_POST['senha'];

      //enviar para model
      $model = new Model;
      $model = $model->validacaoLogin($email, $senha);


      //enviar pra view
      //enviar pra home
      if ($model == true) {
        header(redirecionar.'portal/home'); 
      } else {
        header(redirecionar);
      }
    }
  }


  
  //cadastro de usuário
  public function cadastro()
  {

    //validar se todos os campos estão preenchidos
    if (!empty($_POST['nome']) && !empty($_POST['email'])  && !empty($_POST['curso'])  && !empty($_POST['periodo'])  && !empty($_POST['anoLet'])  && !empty($_POST['dataNasc'])  && !empty($_POST['senha'])  && !empty($_POST['confirSenha'])) {

      $nome =  filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_SPECIAL_CHARS);
      $periodo = filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_SPECIAL_CHARS);
      $anoLet = $_POST['anoLet'];
      $dataNasc =  $_POST['dataNasc'];
      $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS));
      $confirSenha = md5(filter_input(INPUT_POST, 'confirSenha', FILTER_SANITIZE_SPECIAL_CHARS));



      $model = new Model;
      $model = $model->cadastrar(
        $nome,
        $email,
        $curso,
        $periodo,
        $anoLet,
        $dataNasc,
        $senha,
        $confirSenha
      );
    } else {
      $_SESSION['msg_cadastro'] = "Preencha todos os campos";
    }
    header(redirecionar.'site/cadastro');
  }
}
