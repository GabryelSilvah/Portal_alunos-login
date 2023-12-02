<?php
session_start();
include ('conexao.php');

$email = $_SESSION['usuario2'];

//validação no banco de dados
$consulta = mysqli_query($mysqli,"SELECT *
FROM usuarios where email='$email'");

//quantidade de registros no banco de dados 
$rows = mysqli_num_rows($consulta);

//se o email logado for encontrado então ele mostrará as informações do usuário
if($email > 0){
    $linha = mysqli_fetch_assoc($consulta);
   
}else{
    print_r("erro");
}
