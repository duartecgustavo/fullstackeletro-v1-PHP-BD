<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, tecnologia">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>CADASTRO | FSELETRO</title>

    <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="./CSS/global.css">
    <link rel="stylesheet" type="text/css" href="./CSS/cadastro.css">

</head>

<body>

    <!-- LOGO PAGINA -->
    <nav>
        <section class="menucadastro">
            <a href="index.html"><img width="200px" src="imgs/logo3.jpg" alt="HOMEE"></a>
        </section>
    </nav>

    <!-- Campos de cadastro --> 
    <main>
        <!--LOGO PAGINA-->
        <section class="logocadastro">
            <img class="imglogo" src="imgs/cadastro.jpg">
        </section>

        <section class="cadastro">


            <form class="cadastroform"action="cadastroUsuario.php" method="post">

                <h1 class="h1cadastro">INFORMAÇÕES PESSOAIS</h1>

                <label class="labelcadastro" for="cadastro">NOME COMPLETO</label>
                <input class="inputcadastro" type="text" name="nome" placeholder="digite seu nome">

                <label class="labelcadastro" for="email">E-MAIL</label>
                <input class="inputcadastro" type="email" name="email" placeholder="digite seu E-mail">

                <label class="labelcadastro" for="senha">SENHA</label>
                <input class="inputcadastro" type="password" name="senha" placeholder="digite sua senha">

                <label class="labelcadastro" for="nasc">DATADE NASCIMENTO</label>
                <input class="inputcadastro" type="date" name="nascimento" placeholder="digite sua datade nascimento">

                <!-- ---------------------------------------------------------------------------------------------- -->

                <h1 class="h1cadastro">ENDEREÇO</h1>

                <label class="labelcadastro" for="cep">CEP</label>
                <input class="inputcadastro" type="text" name="cep" placeholder="digite o cep de sua rua">

                <label class="labelcadastro" for="rua" style="font-family: Cambria;">RUA</label>
                <input class="inputcadastro" type="text" name="rua" placeholder="digite sua rua">

                <label class="labelcadastro" for="bairro" >BAIRRO</label>
                <input class="inputcadastro" type="text" name="bairro" placeholder="digite seu bairro">

                <label class="labelcadastro" for="cidade">CIDADE/UF</label>
                <input class="inputcadastro" type="text" name="cidade" placeholder="digite sua cidade e UF">

                <button class="botaocadastrar" class="botao-cadast" type="submit" onclick="alert('CADASTRO REALIZADO!')">CADASTRAR</button>

            </form>



        </section>
    </main>




    <!--RODAPÉ-->
    <footer class="rodape" style="bottom: -15%;">
        <!-- FORMAS DE PAGAMENTO-->
        <hr>
        <p class="logofooter"><img width="25%" src="imgs/pagamentos.jpg"></p>

        <img class="imgpag" alt="Formas_De_Pagamento" title="Formas De Pagamento" src="imgs/pagamentos.png">

        <p class="copyright">© 2020 - Recode Pró - Full-Stack-Eletro</p>
    </footer>

</body>

</html>