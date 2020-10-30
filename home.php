<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, tecnologia">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>Full-Stack-Eletro</title>

    <!-- LINK CSS - estilo da pagina-->
    <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="./CSS/global.css">
    <link rel="stylesheet" type="text/css" href="./CSS/home.css">

</head>
<body>

    <!--MENU-->
    <div class="menu">
        <nav  class="menubar">
            <a href="home.php"><img style="font-family: Comic Sans MS;" class="logomenumain" width="200px" src="imgs/logo3.jpg" alt="HOME"></a>
            <a href="produtos.php"><img class="logomenu" width="200px" src="imgs/produtoslogo.jpg" alt="PRODUTOS"></a>
            <a href="lojas.html"><img class="logomenu" width="200px" src="imgs/lojaslogo.jpg" alt="LOJAS"></a>
            <a href="contato.html"><img class="logomenu" width="200px" src="imgs/contatoslogo.jpg" alt="CONTATOS"></a>
        </nav>
    </div>

    <!-- CORPO DA PAGINA-->
    <main>
        <br> <br> <br>
        <!--LOGO PAGINA-->
        <section class="logo">
            <img class="imglogo" src="imgs/logo2.png">
        </section>

        <!--CAPA-->
        <section class="capa">
            <div class="banner">
                <img class="imagemcapa" id="imagemcapa" width="100%" alt="capa" src="imgs/maincapa.jpg">
                
                <div class="maincapadiv">
                    <input type="radio" onclick="trocaCapa()" name="mainbtn" id="maincapa1" class="maincapa">
                    <label for="maincapa1"></label>
                    <input type="radio" onclick="trocaCapa()" name="mainbtn" id="maincapa2" class="maincapa">
                    <label for="maincapa2"> </label>
                    <input type="radio" onclick="trocaCapa()" name="mainbtn" id="maincapa3" class="maincapa">
                    <label for="maincapa3"> </label>
                </div>
            </div>
        </section>

    </main>

    <!--RODAPÉ-->
    <footer class="rodape" style="position: relative;">
        <!-- FORMAS DE PAGAMENTO-->
        <p class="logofooter"><img width="25%" src="imgs/pagamentos.jpg"></p>

        <img class="imgpag" alt="Formas_De_Pagamento" title="Formas De Pagamento" src="imgs/pagamentos.png">    

        <p class="copyright">© 2020 - Recode Pró - Full-Stack-Eletro</p>
    </footer>

    <script src="./JS/eventos.js"></script>
</body>
</html>