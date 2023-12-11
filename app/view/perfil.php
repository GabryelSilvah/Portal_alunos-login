<?php
$perfilModel = new perfilModel;
$linha = $perfilModel->exibirDadosUsuario();
?>
<head>
    <link rel="stylesheet" href="./public/css/perfil.css">
</head>

<body>
    <main>
        <section class="container_perfil">
            <!--Inseindo informações do banco de dados-->
            <label for="">Nome:</label>
            <p> <?php echo $linha['nome']; ?> </p><br>

            <label for="">Email:</label><br>
            <p> <?php echo $linha['email']; ?> </p><br>

            <label for="">Turma:</label><br>
            <p> <?php echo $linha['turma']; ?> </p><br>

            <label for="">Serie:</label><br>
            <p> <?php echo $linha['serie']; ?> </p><br>

            <label for="">Ano letivo:</label><br>
            <p> <?php echo $linha['inicio_ano_letivo']; ?> </p><br>

            <label for="">Data de Nascimento:</label>
            <p> <?php echo $linha['dataNasc']; ?> </p>

        </section>

    </main>
</body>

</html>