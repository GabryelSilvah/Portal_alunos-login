<?php

class Model
{

    public function validacaoLogin($email, $senha)
    {
            
        $con = BancoDados::conexao();

        //pesquisa por usuário no banco de dados
        $query = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email' and senha = md5('$senha')");
        $rows = mysqli_num_rows($query);

        //fazer teste de autenticação de dados digitados no input com os dados do db mysql
        if ($rows > 0) {

            //armazena o usuario e a senha na session
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            return true;
        } else {
                    
            return false;
        }
    }

    public function cadastrar(
        $nome,
        $email,
        $turma,
        $serie,
        $anoLet,
        $dataNasc,
        $senha,
        $confirSenha
    ) {


        $con = BancoDados::conexao();

        $consultar = mysqli_query($con, "SELECT email FROM usuarios WHERE email='$email'");
        $rows = mysqli_num_rows($consultar);

        //validar se esse email já esta cadastrado
        if ($rows > 0) {
            return "existem";
        } else {
            if ($senha === $confirSenha) {
                $adicionar = mysqli_query($con, "INSERT INTO usuarios (id,nome,email,turma,serie,inicio_ano_letivo,dataNasc,senha,confirSenha) 
            VALUES ('','$nome','$email','$turma','$serie','$anoLet','$dataNasc','$senha','$confirSenha')");
                return "sucesso";
            } else {
                return "diferentes";
            }
        }



        mysqli_close($con);
    }
}
