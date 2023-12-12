<?php
if (isset($_SESSION['email'])) {
    header(redirecionar.'portal/home');
    exit;
}
?>

<head>
    <link rel="stylesheet" href="<?php echo http?>/public/css/pagina_login.css">
</head> 


<body>
    <main>
        <section class="container_login">

            <form method="post" action="<?php echo http?>login/logar">
                <div class="login">
                    <img id="img_login" src="<?php echo http?>/public/icones/usuario_login.png" alt="">
                </div>

                <div class="login">
                    <label for="usuario">Usuário:</label>
                    <input required type="email" name="email" id="usuario">
                </div>

                <div class="login">
                    <label for="senha">Senha:</label>
                    <input required type="password" id="senha" name="senha">
                </div>


                <div class="login">
                    <button type="submit" id="btn">Entrar</button>
                </div>

            </form>

            <div class="login">
                <p id="senha"><a href="<?php echo http ?>Site/cadastro">Não possui conta? cadastre-se.</a></p>
                <p id="senha"><a href="<?php echo http ?>Site/redefinir_senha">Esqueceu sua senha?</a></p>
            </div>
        </section>

        <div class="notificacao">


        </div>

    </main>

</body>

</html>