<?php
include("conexao.php");

//pegar via post os dados do formulário de cadastro
$nome = $_POST['nome'];
$email = $_POST['email'];
$turma = $_POST['turma'];
$serie = $_POST['serie'];
$anoLet = $_POST['anoLet'];
$dataNasc = $_POST['dataNasc'];
$senha = md5($_POST['senha']);
$confirSenha = md5($_POST['confirSenha']);

//validar se todos os campos estão preenchidos
if (!empty($nome) && !empty($email) && !empty($turma) && !empty($serie) && !empty($anoLet) && !empty($dataNasc) && !empty($senha) && !empty($confirSenha)) {

    $consultar = mysqli_query($mysqli, "SELECT email FROM usuarios WHERE email='$email'");
    $rows = mysqli_num_rows($consultar);

    //validar se já existem esse email cadastrado
    if ($rows > 0) {
        echo "Já existem um cadastro esse email.";
    } else {
        if ($senha === $confirSenha) {
            $adicionar = mysqli_query($mysqli, "INSERT INTO usuarios (id,nome,email,turma,serie,inicio_ano_letivo,dataNasc,senha,confirSenha) 
            VALUES ('','$nome','$email','$turma','$serie','$anoLet','$dataNasc','$senha','$confirSenha')");
            echo "usuário cadastrado com sucesso";
        } else {
            echo "As senhas são diferentes. A senha e confirmar a senha devem ser iguais";
        }
    }
} else {
    echo "Preencha todos os campos do cadastro";
}



mysqli_close($mysqli);
