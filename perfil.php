<?php
require_once("./templates/estrutura_html.php");
?>

<head>
    <title>Painel aluno</title>
    <link rel="stylesheet" href="./assets/nav_and_footer.css">
    <link rel="stylesheet" href="./assets/perfil.css">
</head>
  
<body>
<?php
include "./php/resgata_banco.php";
require_once("./templates/nav.php");
?>

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