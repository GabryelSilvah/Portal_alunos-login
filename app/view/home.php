<?php
if (!isset($_SESSION['email'])) {
    require_once("./app/view/login.php");
     exit;
 }

 require("./public/templates/nav.php");
?>
<head>
    <link rel="stylesheet" href="../public/css/nav_and_footer.css">
<link rel="stylesheet" href="../public/css/style.css">
</head>

<body>

    <main>
        <section class="container_disciplinas">
            <a href="disciplinas/matematica.html">
                <div class="disciplina">
                    <img class="banner_disc" src="../public/img/banner_disc.png" alt="">
                    <h3>Matemática</h3>
                    <p>Professor:</p>
                </div>
            </a>

            <a href="disciplinas/portugues.html">
                <div class="disciplina">
                    <img class="banner_disc" src="../public/img/banner_disc.png" alt="">
                    <h3>Português</h3>
                    <p>Professor:</p>
                </div>
            </a>

            <a href="disciplinas/geografia.html">
                <div class="disciplina">
                    <img class="banner_disc" src="../public/img/banner_disc.png" alt="">
                    <h3>Geografia</h3>
                    <p>Professor:</p>
                </div>
            </a>

            <a href="disciplinas/ciencia.html">
                <div class="disciplina">
                    <img class="banner_disc" src="../public/img/banner_disc.png" alt="">
                    <h3>Ciências</h3>
                    <p>Professor:</p>
                </div>
            </a>


        </section>

    </main>


</body>

</html>