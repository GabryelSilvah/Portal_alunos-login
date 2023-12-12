<?php
$perfilModel = new perfilModel;
$linha = $perfilModel->exibirDadosUsuario();
?>

<head>
    <link rel="stylesheet" href="<?php echo http ?>./public/css/nav_and_footer.css">
    <link rel="stylesheet" href="<?php echo http ?>./public/css/perfil.css">
</head>
<?php
require("./public/templates/nav.php");
?>

<body>
    <main>
        <section class="container_perfil">
            <!--Inseindo informações do banco de dados-->
            <label for="">Nome:</label>
            <p> <?php echo $linha['nome']; ?> </p><br>

            <label for="">Email:</label><br>
            <p> <?php echo $linha['email']; ?> </p><br>

            <label for="">Data de Nascimento:</label>
            <p> <?php echo $linha['dataNasc']; ?> </p>

            <label for="">Curso:</label><br>
            <p> <?php echo $linha['curso']; ?> </p><br>

            <label for="">Período:</label><br>
            <p> <?php echo $linha['periodo']; ?> </p><br>

            <label for="">Início do curso:</label><br>
            <p> <?php echo $linha['inicio_ano_letivo']; ?> </p><br>

<button>Atualizar dados</button>
        </section>

    </main>
</body>

</html>