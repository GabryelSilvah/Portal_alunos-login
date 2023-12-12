<head>
    <link rel="stylesheet" href="<?php echo http ?>/public/css/cadastro.css">
</head>

<body>
    <main>
        <section class="container_perfil">

            <form method="POST" action="<?php echo http ?>login/cadastro" class="formulario">

                <label for="nome">Nome *</label>
                <input type="text" name="nome" id="nome">

                <label for="email">Email *</label>
                <input type="email" name="email" id="email">

                <label for="turma">Curso *</label>
                <input type="text" name="curso" id="turma">

                <label for="serie">Período *</label>
                <input type="text" name="periodo" id="serie">

                <label for="anoLet">Início do ano letivo *</label>
                <input type="date" name="anoLet" id="anoLet">

                <label for="dataNasc">Data de Nascimento *</label>
                <input type="date" name="dataNasc" id="dataNasc">

                <label for="senha">Senha *</label>
                <input type="password" name="senha" id="senha">

                <label for="confirSenha">Confirmar Senha *</label>
                <input type="password" name="confirSenha" id="confirSenha">



                <button type="submit" class="btn">Cadastrar</button>
            </form>



        </section>

        <div>
            <?php
            if (!empty($_SESSION['msg_cadastro'])) {
                echo $_SESSION['msg_cadastro'];
            }
            ?>
        </div>

    </main>

</body>

</html>