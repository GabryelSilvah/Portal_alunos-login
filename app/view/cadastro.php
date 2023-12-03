<head>
    <link rel="stylesheet" href="./public/css/cadastro.css">
</head>

<body>
    <main>
        <section class="container_perfil">

            <form method="POST" action="cadastrar" class="formulario">

                <label for="nome">Nome *</label>
                <input type="text" name="nome" id="nome">

                <label for="email">Email *</label>
                <input type="email" name="email" id="email">

                <label for="turma">Turma *</label>
                <input type="text" name="turma" id="turma">

                <label for="serie">Série *</label>
                <input type="text" name="serie" id="serie">

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
            require_once("./app/view/view.php");
            class Notificacao
            {

                public function resposta($mensagem)
                {
                   if($mensagem == "inexistentes"){
                    echo"Preencha todos os campos";
                   }else if($mensagem == "diferentes"){
                    echo"As senhas são diferentes";
                   }else if($mensagem == "existe"){
                    echo"Já existe um cadastro com esse email";
                   }else if($mensagem == "sucesso"){
                    echo"Usuário cadastrado com sucesso!";
                   }
                  
                }
            }

            ?>.
        </div>

    </main>

</body>

</html>