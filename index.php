<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina_login</title>
    <link rel="stylesheet" href="assets/pagina_login.css">
    <script src="script.js" defer></script>

</head>

<body>
    <main>
        <section class="container_login">

            <form method="post" action="php/login.php">
                <div class="login">
                    <img id="img_login" src="./icones/usuario_login.png" alt="">
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
                <p id="senha"><a href="cadastrar_user.html">Não possui conta? cadastre-se.</a></p>
                <p id="senha"><a href="esqueceu_senha.html">Esqueceu sua senha?</a></p>
            </div>
        </section>
        
        <div class="notificacao">


        </div>
       
    </main>
    
</body>

</html>