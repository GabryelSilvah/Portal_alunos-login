<?php

class perfilModel
{
    public function exibirDadosUsuario()
    {
       
        $con = BancoDados::conexao();
        $email = $_SESSION['email'];

        //validação no banco de dados
        $consulta = mysqli_query($con, "SELECT *
        FROM usuarios where email='$email'");

        //quantidade de registros no banco de dados 
        $rows = mysqli_num_rows($consulta);

        //se o email logado for encontrado então ele mostrará as informações do usuário
        if ($rows == 1) {
            $linha = mysqli_fetch_assoc($consulta);
            return $linha;
        } else {
            return false;
        }
    }
}
