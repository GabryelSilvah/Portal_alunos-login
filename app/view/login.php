<?php
include_once("./public/templates/estrutura_html.php");
$controller = new Controller;
$controller = $controller->receberLogin();
?>
<head>
    <link rel="stylesheet" href="./public/css/pagina_login.css">
</head>
<body>
    <main>
        <section class="container_login">

            <form method="post" action="logar">
                <div class="login">
                    <img id="img_login" src="./public/icones/usuario_login.png" alt="">
                </div>

                <div class="login">
                    <label for="usuario">Usuário:</label>
                    <input required type="email" name="usuario" id="usuario">
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
                <p id="senha"><a href="cadastro">Não possui conta? cadastre-se.</a></p>
                <p id="senha"><a href="redefinir_senha">Esqueceu sua senha?</a></p>
            </div>
        </section>
        
        <div class="notificacao">


        </div>
       
    </main>
    
</body>

</html>