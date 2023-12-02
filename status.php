<?php
require_once("./templates/estrutura_html.php");
?>
<head>
    <link rel="stylesheet" href="./assets/status.css">
</head>
<body>
<?php
require_once("./templates/nav.php");
?>

    <main>
        <h1 class="titulo">Calculadora de notas</h1>
        <div class="container_bimestre">
    
            <div class="bimestre">
                <div class="objeto">
                    <p>Nota do 1° Bimestre.</p>
                    <input type="number" id="nota1">
                </div>
                <p id="status_preliminar" class="conf_font"></p>
            </div>
    
            <div class="bimestre">
                <div class="objeto">
                    <p>Nota do 2° Bimestre.</p>
                    <input type="number" id="nota2">
                </div>
                <p id="status_preliminar2" class="conf_font"></p>
            </div>
    
            <div class="bimestre">
                <div class="objeto">
                    <p>Nota do 3° Bimestre.</p>
                    <input type="number" id="nota3">
                </div>
                <p id="status_preliminar3" class="conf_font"></p>
            </div>
    
            <div class="bimestre">
                <div class="objeto">
                    <p>Nota do 4° Bimestre.</p>
                    <input type="number" id="nota4">
                </div>
                <p id="status_preliminar4" class="conf_font"></p>
            </div>
    
            <div class="container_final">
                <button id="btn" onclick="bimestre1(),bimestre2(),bimestre3(),bimestre4(), verificar()">Verificar</button>
                <p id="paragrafo_bimetre">Nota total:</p>
                <p id="status_final" id="paragrafo_bimetre"></p>
                <p id="mensagem_final" class="conf_font"></p>
            </div>
        </div>
    </main>
    

    <script src="Aula1.js" defer></script>

</body>

</html>